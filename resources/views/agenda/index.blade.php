@extends('layouts.app')

@section('template_title')
    Agenda
@endsection

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

                             <div class="float-right">
                                <a href="{{ route('agendas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
										<th>Odontologoid</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agendas as $agenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agenda->nombre }}</td>
											<td>{{ $agenda->Odontologoid }}</td>

                                            <td>
                                                <form action="{{ route('agendas.destroy',$agenda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agendas.show',$agenda->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agendas.edit',$agenda->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $agendas->links() !!}
            </div>
        </div>
    </div>
@endsection
