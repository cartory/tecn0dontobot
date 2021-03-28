<div class="box box-info padding-1">
    <div class="box-body">
        @php
           use \App\Models\Consultum;
        @endphp
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
            {{ Form::date('fecha', $recetum->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Consultaid') }}
            {{ Form::select('Consultaid',Consultum::all()->pluck('fechaEmision','id'), $recetum->Consultaid, ['class' => 'form-control' . ($errors->has('Consultaid') ? ' is-invalid' : ''), 'placeholder' => 'Consultaid']) }}
            {!! $errors->first('Consultaid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>