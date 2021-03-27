<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::number('ci', $odontologo->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $odontologo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fNac') }}
            {{ Form::date('fNac', $odontologo->fNac, ['class' => 'form-control' . ($errors->has('fNac') ? ' is-invalid' : ''), 'placeholder' => 'Fnac']) }}
            {!! $errors->first('fNac', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::number('celular', $odontologo->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'), $odontologo->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        @php
             use App\Models\User; 
        @endphp
        <div class="form-group">
            {{ Form::label('Email de usuario') }}
            {{ Form::select('Usuarioid',User::all()->pluck('email'), $odontologo->Usuarioid, ['class' => 'form-control' . ($errors->has('Usuarioid') ? ' is-invalid' : ''), 'placeholder' => 'Usuarioid']) }}
            {!! $errors->first('Usuarioid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>