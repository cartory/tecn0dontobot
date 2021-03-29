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

                             <div class="float-right">
                                <a href="{{ route('receta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva') }}
                                </a>
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
                            <table class="table table-striped table-hover">
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
                                                <form action="{{ route('receta.destroy',$recetum->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('receta.show',$recetum->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('receta.edit',$recetum->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
