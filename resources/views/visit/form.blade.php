<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id paciente') }}
            {{ Form::text('id_records', $visit->id_records, ['class' => 'form-control' . ($errors->has('id_records') ? ' is-invalid' : ''), 'placeholder' => 'Id paciente']) }}
            {!! $errors->first('id_records', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id doctor') }}
            {{ Form::text('id_doctors', $visit->id_doctors, ['class' => 'form-control' . ($errors->has('id_doctors') ? ' is-invalid' : ''), 'placeholder' => 'Id doctor']) }}
            {!! $errors->first('id_doctors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $visit->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diagnóstico') }}
            {{ Form::text('diagnostic', $visit->diagnostic, ['class' => 'form-control' . ($errors->has('diagnostic') ? ' is-invalid' : ''), 'placeholder' => 'Diagnóstico']) }}
            {!! $errors->first('diagnostic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tratamiento') }}
            {{ Form::text('treatments', $visit->treatments, ['class' => 'form-control' . ($errors->has('treatments') ? ' is-invalid' : ''), 'placeholder' => 'Tratamiento']) }}
            {!! $errors->first('treatments', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>