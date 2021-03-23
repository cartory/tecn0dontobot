@extends('layouts.app')

@section('template_title')
    {{ $recetum->name ?? 'Show Recetum' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Recetum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $recetum->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $recetum->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $recetum->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Consultaid:</strong>
                            {{ $recetum->Consultaid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
