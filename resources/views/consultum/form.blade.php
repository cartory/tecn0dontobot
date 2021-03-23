<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fechaEmision') }}
            {{ Form::text('fechaEmision', $consultum->fechaEmision, ['class' => 'form-control' . ($errors->has('fechaEmision') ? ' is-invalid' : ''), 'placeholder' => 'Fechaemision']) }}
            {!! $errors->first('fechaEmision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Citaid') }}
            {{ Form::text('Citaid', $consultum->Citaid, ['class' => 'form-control' . ($errors->has('Citaid') ? ' is-invalid' : ''), 'placeholder' => 'Citaid']) }}
            {!! $errors->first('Citaid', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>