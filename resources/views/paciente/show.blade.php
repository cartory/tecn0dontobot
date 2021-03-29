@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $paciente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $paciente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fnac:</strong>
                            {{ $paciente->fNac }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $paciente->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $paciente->genero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
