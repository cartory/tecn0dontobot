<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('horaInicio') }}
            {{ Form::text('horaInicio', $citum->horaInicio, ['class' => 'form-control' . ($errors->has('horaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Horainicio']) }}
            {!! $errors->first('horaInicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('horaFin') }}
            {{ Form::text('horaFin', $citum->horaFin, ['class' => 'form-control' . ($errors->has('horaFin') ? ' is-invalid' : ''), 'placeholder' => 'Horafin']) }}
            {!! $errors->first('horaFin', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pacienteid') }}
            {{ Form::text('Pacienteid', $citum->Pacienteid, ['class' => 'form-control' . ($errors->has('Pacienteid') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }}
            {!! $errors->first('Pacienteid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Agendaid') }}
            {{ Form::text('Agendaid', $citum->Agendaid, ['class' => 'form-control' . ($errors->has('Agendaid') ? ' is-invalid' : ''), 'placeholder' => 'Agendaid']) }}
            {!! $errors->first('Agendaid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>