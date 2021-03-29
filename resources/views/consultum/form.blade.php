<div class="box box-info padding-1">
    <div class="box-body">
        @php
            use App\Models\Citum;
            use App\Models\Tratamiento;
            $tratamientos=Tratamiento::all();
        @endphp
        <div class="form-group">
            {{ Form::label('fechaEmision') }}
            {{ Form::date('fechaEmision', $consultum->fechaEmision, ['class' => 'form-control' . ($errors->has('fechaEmision') ? ' is-invalid' : ''), 'placeholder' => 'Fechaemision']) }}
            {!! $errors->first('fechaEmision', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Citaid') }}
            {{ Form::select('Citaid',Citum::all()->pluck('fecha','id'), $consultum->Citaid, ['class' => 'form-control' . ($errors->has('Citaid') ? ' is-invalid' : ''), 'placeholder' => 'Citaid']) }}
            {!! $errors->first('Citaid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group" style="padding-left: 5%">
            {{ Form::label('Tratamientos Realizados') }}

            @foreach ($tratamientos as $tratamiento)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name=tratamientos[] value="{{$tratamiento->id}}" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                 {{$tratamiento->nombre}}
                </label>
              </div>
            @endforeach
            {!! $errors->first('Tratamientos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
