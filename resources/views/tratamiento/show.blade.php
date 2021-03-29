@extends('layouts.app')

@section('template_title')
    {{ $tratamiento->name ?? 'Show Tratamiento' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tratamiento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tratamientos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tratamiento->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidadid:</strong>
                            {{ $tratamiento->Especialidadid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
