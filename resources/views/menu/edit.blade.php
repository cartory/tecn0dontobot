@extends('layouts.app')


@section('content')
<div class="col-8">
    {!! Menu::render() !!}
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
{!! Menu::scripts() !!}  
@endpush
