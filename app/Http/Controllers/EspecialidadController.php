<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;

/**
 * Class EspecialidadController
 * @package App\Http\Controllers
 */
class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){

            $especialidads = Especialidad::search($request->search)

                ->paginate(6);

        }else{

            $especialidads = Especialidad::paginate(6);

        }

        return view('especialidad.index', compact('especialidads'))
            ->with('i', (request()->input('page', 1) - 1) * $especialidads->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidad = new Especialidad();
        return view('especialidad.create', compact('especialidad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Especialidad::$rules);

        $especialidad = Especialidad::create($request->all());

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidad created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $especialidad = Especialidad::find($id);

        return view('especialidad.show', compact('especialidad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $especialidad = Especialidad::find($id);

        return view('especialidad.edit', compact('especialidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Especialidad $especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidad $especialidad)
    {
        request()->validate(Especialidad::$rules);

        $especialidad->update($request->all());

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidad updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $especialidad = Especialidad::find($id)->delete();

        return redirect()->route('especialidades.index')
            ->with('success', 'Especialidad deleted successfully');
    }

    public function search()
    {
        // queries to Algolia search index and returns matched records as Eloquent Models
        $espe = Especialidad::search('title')->get();

        dd($espe);
    }
}
