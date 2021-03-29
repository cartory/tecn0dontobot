@extends('layouts.app')

@section('template_title')
    Agenda
@endsection
@php
use App\Models\Odontologo;
@endphp
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agenda') }}
                            </span>
                            <div>
                                <div class="float-right" style="margin-left: 5px">
                                    <a href="{{ route('agendas.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Crear Nueva') }}
                                    </a>
                                </div>
                                <div class="float-right">
                                    <a href="{{ url('api/excel/agendas') }}" class="btn btn-success btn-sm float-right"
                                        data-placement="left">
                                        📊 Excel
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Odontologo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agendas as $agenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $agenda->nombre }}</td>
                                            <td>{{ Odontologo::where('id', $agenda->Odontologoid)->pluck('nombre')->first() }}
                                            </td>

                                            <td>
                                                <form action="{{ route('agendas.destroy', $agenda->id) }}" method="POST">
                                                    <a title="show" class="btn btn-sm btn-primary "
                                                        href="{{ route('agendas.show', $agenda->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i></a>
                                                    <a title="edit" class="btn btn-sm btn-success"
                                                        href="{{ route('agendas.edit', $agenda->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button title="delete" type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $agendas->links() !!}
            </div>
        </div>
    </div>
@endsection
