<?php

namespace App\Http\Controllers;

use App\Models\Recetum;
use Illuminate\Http\Request;

/**
 * Class RecetumController
 * @package App\Http\Controllers
 */
class RecetumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receta = Recetum::paginate();

        return view('recetum.index', compact('receta'))
            ->with('i', (request()->input('page', 1) - 1) * $receta->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recetum = new Recetum();
        return view('recetum.create', compact('recetum'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Recetum::$rules);

        $recetum = Recetum::create($request->all());

        return redirect()->route('receta.index')
            ->with('success', 'Recetum created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recetum = Recetum::find($id);

        return view('recetum.show', compact('recetum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recetum = Recetum::find($id);

        return view('recetum.edit', compact('recetum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Recetum $recetum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetum $recetum)
    {
        request()->validate(Recetum::$rules);

        $recetum->update($request->all());

        return redirect()->route('receta.index')
            ->with('success', 'Recetum updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $recetum = Recetum::find($id)->delete();

        return redirect()->route('receta.index')
            ->with('success', 'Recetum deleted successfully');
    }
}
