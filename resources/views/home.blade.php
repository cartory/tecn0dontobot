@extends('layouts.app')
@section('template_title')
    Home
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
              <div style="height: 16px"></div>
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <button style="float: right; margin:5px;" onclick="setTheme('claro', {{ json_encode(Auth::user()->id) }})" class="btn btn-warning">Claro</button>

                    <button style="float: right; margin:5px;" onclick="setTheme('oscuro', {{ json_encode(Auth::user()->id) }})"  class="btn btn-dark">Oscuro</button>

                    <button style="float: right; margin:5px;" onclick="setTheme('nino', {{ json_encode(Auth::user()->id) }})"  class="btn btn-success">Infantil</button>

                    <button style="float: right; margin:5px;" onclick="setTheme('adolescente', {{ json_encode(Auth::user()->id) }})" class="btn btn-danger">Adolescente</button>

                    <button style="float: right; margin:5px;" onclick="setTheme('adulto', {{ json_encode(Auth::user()->id) }})" class="btn btn-info">Adulto</button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas logueado!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
