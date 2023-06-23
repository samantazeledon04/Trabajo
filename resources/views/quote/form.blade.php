<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id paciente') }}
            {{ Form::text('id_records', $quote->id_records, ['class' => 'form-control' . ($errors->has('id_records') ? ' is-invalid' : ''), 'placeholder' => 'id paciente']) }}
            {!! $errors->first('id_records', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id sevicio') }}
            {{ Form::text('id_services', $quote->id_services, ['class' => 'form-control' . ($errors->has('id_services') ? ' is-invalid' : ''), 'placeholder' => 'Id Servicio']) }}
            {!! $errors->first('id_services', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('date', $quote->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Razón') }}
            {{ Form::text('reason', $quote->reason, ['class' => 'form-control' . ($errors->has('reason') ? ' is-invalid' : ''), 'placeholder' => 'Razón']) }}
            {!! $errors->first('reason', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>