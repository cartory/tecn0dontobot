@extends('layouts.app')
@section('template_title')
    Home
@endsection

@section('content')
<div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
