<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::text('ci', $paciente->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $paciente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fNac') }}
            {{ Form::date('fNac', $paciente->fNac, ['class' => 'form-control' . ($errors->has('fNac') ? ' is-invalid' : ''), 'placeholder' => 'Fnac']) }}
            {!! $errors->first('fNac', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $paciente->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::select('genero', array('M' => 'Masculino', 'F' => 'Femenino'), $paciente->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>