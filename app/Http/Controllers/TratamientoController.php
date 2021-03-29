<?php

namespace App\Http\Controllers;

use App\Models\Tratamiento;
use Illuminate\Http\Request;

use App\Exports\TratamientoExport;
use Maatwebsite\Excel\Facades\Excel;
/**
 * Class TratamientoController
 * @package App\Http\Controllers
 */
class TratamientoController extends Controller
{
    public function export() {
        return Excel::download(new TratamientoExport(), 'tratamientos.xlsx');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){

            $tratamientos = Tratamiento::search($request->search)

                ->paginate(6);

        }else{

            $tratamientos = Tratamiento::paginate(6);

        }

        //$tratamientos = Tratamiento::paginate();

        return view('tratamiento.index', compact('tratamientos'))
            ->with('i', (request()->input('page', 1) - 1) * $tratamientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tratamiento = new Tratamiento();
        return view('tratamiento.create', compact('tratamiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tratamiento::$rules);

        $tratamiento = Tratamiento::create($request->all());

        return redirect()->route('tratamientos.index')
            ->with('success', 'Tratamiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tratamiento = Tratamiento::find($id);

        return view('tratamiento.show', compact('tratamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamiento = Tratamiento::find($id);

        return view('tratamiento.edit', compact('tratamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tratamiento $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tratamiento $tratamiento)
    {
        request()->validate(Tratamiento::$rules);

        $tratamiento->update($request->all());

        return redirect()->route('tratamientos.index')
            ->with('success', 'Tratamiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tratamiento = Tratamiento::find($id)->delete();

        return redirect()->route('tratamientos.index')
            ->with('success', 'Tratamiento deleted successfully');
    }

    public function search($searchKey){
        $trats = Tratamiento::search($searchKey)->get();
        return compact($trats);
    }
}
