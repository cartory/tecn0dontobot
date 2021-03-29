@extends('layouts.app')

@section('template_title')
    Recetum
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Recetum') }}
                            </span>

                            <div>
                                <div class="float-right" style="margin-left: 5px">
                                    <a href="{{ route('receta.create') }}" class="btn btn-primary btn-sm float-right"
                                        data-placement="left">
                                        {{ __('Crear Nueva') }}
                                    </a>
                                </div>
                                <div class="float-right">
                                    <a href="{{ url('api/excel/recetas') }}" class="btn btn-success btn-sm float-right"
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

                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th>Consultaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($receta as $recetum)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $recetum->titulo }}</td>
                                            <td>{{ $recetum->descripcion }}</td>
                                            <td>{{ $recetum->fecha }}</td>
                                            <td>{{ $recetum->Consultaid }}</td>

                                            <td>
                                                <form action="{{ route('receta.destroy', $recetum->id) }}" method="POST">
                                                    <a title="show" class="btn btn-sm btn-primary "
                                                        href="{{ route('receta.show', $recetum->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i></a>
                                                    <a title="edit" class="btn btn-sm btn-success"
                                                        href="{{ route('receta.edit', $recetum->id) }}"><i
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
                {!! $receta->links() !!}
            </div>
        </div>
    </div>
@endsection
