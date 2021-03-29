@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Contraseña:</strong>
                            {{ $usuario->contraseña }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
