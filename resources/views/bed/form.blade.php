<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id Habitación') }}
            {{ Form::text('id_bedrooms', $bed->id_bedrooms, ['class' => 'form-control' . ($errors->has('id_bedrooms') ? ' is-invalid' : ''), 'placeholder' => 'Id Habitación']) }}
            {!! $errors->first('id_bedrooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número') }}
            {{ Form::text('number', $bed->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Número']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Particularidad') }}
            {{ Form::text('particularity', $bed->particularity, ['class' => 'form-control' . ($errors->has('particularity') ? ' is-invalid' : ''), 'placeholder' => 'Particularidad']) }}
            {!! $errors->first('particularity', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('state', $bed->state, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'State']) }}
            {!! $errors->first('state', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>