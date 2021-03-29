<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Odontologo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class AgendaController
 * @package App\Http\Controllers
 */
class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){

            $agendas = Agenda::search($request->search)

                ->paginate(6);

        }else{

            $agendas = Agenda::paginate(6);

        }

        return view('agenda.index', compact('agendas'))
            ->with('i', (request()->input('page', 1) - 1) * $agendas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agenda = new Agenda();
        $loggedUserId = Auth::user()->id;
        $agenda->Odontologoid=Odontologo::where('Usuarioid', $loggedUserId)->firstOrFail()->id;

        return view('agenda.create', compact('agenda'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Agenda::$rules);

        $agenda = Agenda::create($request->all());

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agenda = Agenda::find($id);

        return view('agenda.show', compact('agenda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agenda = Agenda::find($id);

        return view('agenda.edit', compact('agenda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Agenda $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        request()->validate(Agenda::$rules);

        $agenda->update($request->all());

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $agenda = Agenda::find($id)->delete();

        return redirect()->route('agendas.index')
            ->with('success', 'Agenda deleted successfully');
    }
}
