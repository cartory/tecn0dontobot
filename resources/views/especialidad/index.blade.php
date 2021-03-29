@extends('layouts.app')

@section('template_title')
    Especialidad
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Especialidad') }}
                            </span>
                            <div>
                                <div class="float-right" style="margin-left: 5px">
                                    <a href="{{ route('especialidades.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Create New') }}
                                    </a>
                                </div>
                                <div class="float-right">
                                    <a href="{{ url('api/excel/especialidades') }}" class="btn btn-success btn-sm float-right"
                                        data-placement="left"
                                        download
                                    >
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
                                        <th>Acción</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($especialidads as $especialidad)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $especialidad->nombre }}</td>

                                            <td>
                                                <form action="{{ route('especialidades.destroy', $especialidad->id) }}"
                                                    method="POST">
                                                    <a title="show" class="btn btn-sm btn-primary "
                                                        href="{{ route('especialidades.show', $especialidad->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i></a>
                                                    <a title="edit" class="btn btn-sm btn-success"
                                                        href="{{ route('especialidades.edit', $especialidad->id) }}"><i
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
                {!! $especialidads->links() !!}
            </div>
        </div>
    </div>
@endsection
