@extends('layouts.app')

@section('template_title')
    Tratamiento
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tratamiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tratamientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

										<th>Nombre</th>
										<th>Especialidadid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tratamientos as $tratamiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $tratamiento->nombre }}</td>
											<td>{{ $tratamiento->Especialidadid }}</td>

                                            <td>
                                                <form action="{{ route('tratamientos.destroy',$tratamiento->id) }}" method="POST">
                                                    <a 
                                                        title="show"
                                                    class="btn btn-sm btn-primary " href="{{ route('tratamientos.show',$tratamiento->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a 
                                                        title="edit"
                                                    class="btn btn-sm btn-success" href="{{ route('tratamientos.edit',$tratamiento->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button 
                                                        title="delete"
                                                    type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tratamientos->links() !!}
            </div>
        </div>
    </div>
@endsection
