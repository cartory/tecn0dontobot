@extends('layouts.app')

@section('template_title')
    Citas
@endsection
@php
        use App\Models\Paciente; 
        use App\Models\Agenda; 
    
@endphp
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('citas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Horainicio</th>
										<th>Horafin</th>
                                        <th>fecha</th>
										<th>Paciente</th>
										<th>Agendaid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cita as $citum)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $citum->horaInicio }}</td>
											<td>{{ $citum->horaFin }}</td>
											<td>{{ $citum->fecha }}</td>
											<td>{{Paciente::where('id', $citum->Pacienteid)->pluck('nombre')->first() }}</td>
											<td>{{Agenda::where('id', $citum->Agendaid)->pluck('nombre')->first() }}</td>

                                            <td>
                                                <form action="{{ route('citas.destroy',$citum->id) }}" method="POST">
                                                    <a 
                                                        title="show"
                                                    class="btn btn-sm btn-primary " href="{{ route('citas.show',$citum->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a 
                                                        title="edit"
                                                    class="btn btn-sm btn-success" href="{{ route('citas.edit',$citum->id) }}"><i class="fa fa-fw fa-edit"></i></a>
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
                {!! $cita->links() !!}
            </div>
        </div>
    </div>
@endsection
