<?php

namespace App\Http\Controllers;

use App\Models\Consultum;
use App\Models\Tratamiento;
use Illuminate\Http\Request;
use App\Models\ConsultaTratamiento;

use App\Exports\ConsultumExport;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class ConsultumController
 * @package App\Http\Controllers
 */
class ConsultumController extends Controller
{
    public function export() {
        return Excel::download(new ConsultumExport(), 'consultas.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){

            $consulta = Consultum::search($request->search)

                ->paginate(6);

        }else{

            $consulta = Consultum::paginate(6);

        }

        return view('consultum.index', compact('consulta'))
            ->with('i', (request()->input('page', 1) - 1) * $consulta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultum = new Consultum();
        return view('consultum.create', compact('consultum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consultum::$rules);

        $consultum = Consultum::create($request->all());
        // \Log::info($consultum->id);
        foreach ($request->tratamientos as $tratamiento) {
            # code...
            ConsultaTratamiento::create(['Tratamientoid'=>$tratamiento,'Consultaid'=>($consultum->id)]);
        }

        return redirect()->route('consulta.index')
            ->with('success', 'Consultum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultum = Consultum::find($id);
        $consultaTratamiento=ConsultaTratamiento::where('Consultaid',$id)->get()->pluck('Tratamientoid');
        $tratamientosRealizados=Tratamiento::whereIn('id',$consultaTratamiento)->get();
        return view('consultum.show', compact('consultum','tratamientosRealizados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultum = Consultum::find($id);



        $consultum->fechaEmision = explode(" ",$consultum->fechaEmision)[0];

        return view('consultum.edit', compact('consultum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consultum $consultum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultum $consultum)
    {
        request()->validate(Consultum::$rules);

        $consultum->update($request->all());

        return redirect()->route('consulta.index')
            ->with('success', 'Consultum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultum = Consultum::find($id)->delete();
        $intermedium=ConsultaTratamiento::where('Consultaid',$id)->get();
        foreach ($intermedium as $unaConsultaTratamiento ) {
           $unaConsultaTratamiento->delete();
        }
        return redirect()->route('consulta.index')
            ->with('success', 'Consultum deleted successfully');
    }
}
