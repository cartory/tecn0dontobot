@extends('layouts.app')

@section('template_title')
    Create Recetum
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Receta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('receta.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('titulo') }}
                                        {{ Form::text('titulo', $recetum->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
                                        {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('descripcion') }}
                                        {{ Form::textarea('descripcion', $recetum->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('fecha') }}
                                        {{ Form::text('fecha', $recetum->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
                                        {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
                                    </div>
                                    <div d class="form-group">
                                         {{ Form::label('Codigo de consulta') }}
                                        <input disabled class="form-control" value="{{$consultaSeleccionadaId}}" type="text">
                                        {{-- {{ Form::label('Consultaid') }}
                                        {{ Form::text('Consultaid', $recetum->Consultaid, ['class' => 'form-control' . ($errors->has('Consultaid') ? ' is-invalid' : ''), 'placeholder' => 'Consultaid']) }}
                                        {!! $errors->first('Consultaid', '<div class="invalid-feedback">:message</p>') !!} --}}
                                    </div>
                            
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
