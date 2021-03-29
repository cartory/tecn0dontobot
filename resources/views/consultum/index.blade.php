@extends('layouts.app')

@section('template_title')
    Consultas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Connsultas') }}
                            </span>

                            <div>
                                <div class="float-right" style="margin-left: 5px">
                                    <a href="{{ route('consulta.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Crear Nueva') }}
                                    </a>
                                </div>
                                <div class="float-right">
                                    <a href="{{ url('api/excel/consultas') }}" class="btn btn-success btn-sm float-right"
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

                                        <th>Fechaemision</th>
                                        <th>Citaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consulta as $consultum)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $consultum->fechaEmision }}</td>
                                            <td>{{ $consultum->Citaid }}</td>

                                            <td>

                                                <form action="{{ route('consulta.destroy', $consultum->id) }}"
                                                    method="POST">

                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('recetacreateFromConsulta', $consultum->id) }}"><i
                                                            class="fa fa-fw fa-book"></i> Recetar</a>
                                                    <a title="show" class="btn btn-sm btn-primary "
                                                        href="{{ route('consulta.show', $consultum->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i></a>
                                                    <a title="edit" class="btn btn-sm btn-success"
                                                        href="{{ route('consulta.edit', $consultum->id) }}"><i
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
                {!! $consulta->links() !!}
            </div>
        </div>
    </div>
@endsection
