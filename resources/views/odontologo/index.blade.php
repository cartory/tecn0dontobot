@extends('layouts.app')

@section('template_title')
    Odontologo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Odontologo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('odontologos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Ci</th>
										<th>Nombre</th>
										<th>Fnac</th>
										<th>Celular</th>
										<th>Genero</th>
                                        {{-- Equivalente a usuarioid: --}}
										<th>Email de Usuario</th> 

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        use App\Models\User; 
                                    @endphp
                                    @foreach ($odontologos as $odontologo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $odontologo->ci }}</td>
											<td>{{ $odontologo->nombre }}</td>
											<td>{{ $odontologo->fNac }}</td>
											<td>{{ $odontologo->celular }}</td>
											<td>{{ $odontologo->genero }}</td>
											<td>{{ User::where('id',$odontologo->Usuarioid)->pluck('email')->first() }}</td>

                                            <td>
                                                <form action="{{ route('odontologos.destroy',$odontologo->id) }}" method="POST">
                                                    <a 
                                                        title="show"
                                                    class="btn btn-sm btn-primary " href="{{ route('odontologos.show',$odontologo->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a 
                                                        title="edit"
                                                    class="btn btn-sm btn-success" href="{{ route('odontologos.edit',$odontologo->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $odontologos->links() !!}
            </div>
        </div>
    </div>
@endsection
