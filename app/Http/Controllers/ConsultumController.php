<?php

namespace App\Http\Controllers;

use App\Models\ConsultaTratamiento;
use App\Models\Consultum;
use Illuminate\Http\Request;

/**
 * Class ConsultumController
 * @package App\Http\Controllers
 */
class ConsultumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consulta = Consultum::paginate();

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
     * id  de la consulta
     */
    public function createFromConsulta($consultaSeleccionadaId)
    {
        return view('consultum.createFromConsulta', compact('consultaSeleccionadaId'));
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
        \Log::info($consultum->id);
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

        return view('consultum.show', compact('consultum'));
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
