@extends('layouts.app')

@section('template_title')
    {{ $citum->name ?? 'Show Citum' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Citum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Horainicio:</strong>
                            {{ $citum->horaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Horafin:</strong>
                            {{ $citum->horaFin }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $citum->Pacienteid }}
                        </div>
                        <div class="form-group">
                            <strong>Agendaid:</strong>
                            {{ $citum->Agendaid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
