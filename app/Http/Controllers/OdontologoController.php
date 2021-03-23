<?php

namespace App\Http\Controllers;

use App\Models\Odontologo;
use Illuminate\Http\Request;

/**
 * Class OdontologoController
 * @package App\Http\Controllers
 */
class OdontologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odontologos = Odontologo::paginate();

        return view('odontologo.index', compact('odontologos'))
            ->with('i', (request()->input('page', 1) - 1) * $odontologos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $odontologo = new Odontologo();
        return view('odontologo.create', compact('odontologo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Odontologo::$rules);

        $odontologo = Odontologo::create($request->all());

        return redirect()->route('odontologos.index')
            ->with('success', 'Odontologo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $odontologo = Odontologo::find($id);

        return view('odontologo.show', compact('odontologo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $odontologo = Odontologo::find($id);

        return view('odontologo.edit', compact('odontologo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Odontologo $odontologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Odontologo $odontologo)
    {
        request()->validate(Odontologo::$rules);

        $odontologo->update($request->all());

        return redirect()->route('odontologos.index')
            ->with('success', 'Odontologo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $odontologo = Odontologo::find($id)->delete();

        return redirect()->route('odontologos.index')
            ->with('success', 'Odontologo deleted successfully');
    }
}
