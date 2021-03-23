@extends('layouts.app')

@section('template_title')
    {{ $consultum->name ?? 'Show Consultum' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Consultum</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consulta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechaemision:</strong>
                            {{ $consultum->fechaEmision }}
                        </div>
                        <div class="form-group">
                            <strong>Citaid:</strong>
                            {{ $consultum->Citaid }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
