<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id sala') }}
            {{ Form::text('id_rooms', $bedroom->id_rooms, ['class' => 'form-control' . ($errors->has('id_rooms') ? ' is-invalid' : ''), 'placeholder' => 'Id sala']) }}
            {!! $errors->first('id_rooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('number', $bedroom->number, ['class' => 'form-control' . ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Número']) }}
            {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capacidad') }}
            {{ Form::text('ability', $bedroom->ability, ['class' => 'form-control' . ($errors->has('ability') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('ability', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>