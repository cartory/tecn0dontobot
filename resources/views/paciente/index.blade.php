@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
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
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Ci</th>
                                        <th>Nombre</th>
                                        <th>Fnac</th>
                                        <th>Celular</th>
                                        <th>Genero</th>
                                        {{-- <th>Acción</th> --}}
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $paciente->ci }}</td>
                                            <td>{{ $paciente->nombre }}</td>
                                            <td>{{ $paciente->fNac }}</td>
                                            <td>{{ $paciente->celular }}</td>
                                            <td>{{ $paciente->genero }}</td>

                                            <td>
                                                <form id="opts" action="{{ route('pacientes.destroy', $paciente->id) }}"
                                                    method="POST">
                                                    <a title="show" class="btn btn-sm btn-primary "
                                                        href="{{ route('pacientes.show', $paciente->id) }}">
                                                        <i class="fa fa-fw fa-eye"></i></a>
                                                    <a title="edit" class="btn btn-sm btn-success"
                                                        href="{{ route('pacientes.edit', $paciente->id) }}"><i
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
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection

{{-- @push('scripts')
@endpush --}}
