@extends('layouts.app')

@section('template_title')
    {{ $odontologo->name ?? 'Show Odontologo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Odontologo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('odontologos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $odontologo->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $odontologo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fnac:</strong>
                            {{ $odontologo->fNac }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $odontologo->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $odontologo->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarioid:</strong>
                            {{ $odontologo->Usuarioid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
