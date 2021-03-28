<div class="box box-info padding-1">
    <div class="box-body">
        @php
            use App\Models\Especialidad; 
        @endphp
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $tratamiento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidadid') }}
            {{ Form::select('Especialidadid',Especialidad::all()->pluck('nombre','id'), $tratamiento->Especialidadid, ['class' => 'form-control' . ($errors->has('Especialidadid') ? ' is-invalid' : ''), 'placeholder' => 'Especialidadid']) }}
            {!! $errors->first('Especialidadid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>