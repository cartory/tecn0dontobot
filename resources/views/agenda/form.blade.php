<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $agenda->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        Nota: La agenda sera asignada a su usuario : {{Auth::user()->name}}
        <hr>
        <div hidden class="form-group">
            {{ Form::label('Odontologoid') }}
            {{ Form::number('Odontologoid', $agenda->Odontologoid, ['class' => 'form-control' . ($errors->has('Odontologoid') ? ' is-invalid' : ''), 'placeholder' => 'Odontologoid']) }}
            {!! $errors->first('Odontologoid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>