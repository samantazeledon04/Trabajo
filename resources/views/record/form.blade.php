<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Id Hospital') }}
            {{ Form::text('id_hospitals', $record->id_hospitals, ['class' => 'form-control' . ($errors->has('id_hospitals') ? ' is-invalid' : ''), 'placeholder' => 'Id Hospital']) }}
            {!! $errors->first('id_hospitals', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de cédula') }}
            {{ Form::text('identity_card', $record->identity_card, ['class' => 'form-control' . ($errors->has('identity_card') ? ' is-invalid' : ''), 'placeholder' => 'Número de cédula']) }}
            {!! $errors->first('identity_card', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $record->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surnames', $record->surnames, ['class' => 'form-control' . ($errors->has('surnames') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('surnames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de cumpleaños') }}
            {{ Form::text('birthdate', $record->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de cumpleaños']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::text('gender', $record->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de seguridad') }}
            {{ Form::text('security_number', $record->security_number, ['class' => 'form-control' . ($errors->has('security_number') ? ' is-invalid' : ''), 'placeholder' => 'Número de seguridad']) }}
            {!! $errors->first('security_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $record->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('mail', $record->mail, ['class' => 'form-control' . ($errors->has('mail') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidad') }}
            {{ Form::text('specialty', $record->specialty, ['class' => 'form-control' . ($errors->has('specialty') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
            {!! $errors->first('specialty', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de télefono') }}
            {{ Form::text('phone_number', $record->phone_number, ['class' => 'form-control' . ($errors->has('phone_number') ? ' is-invalid' : ''), 'placeholder' => 'Número de télefono']) }}
            {!! $errors->first('phone_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de emergencia') }}
            {{ Form::text('emergency_number', $record->emergency_number, ['class' => 'form-control' . ($errors->has('emergency_number') ? ' is-invalid' : ''), 'placeholder' => 'Número de emergencia']) }}
            {!! $errors->first('emergency_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de entrada') }}
            {{ Form::text('entry_date', $record->entry_date, ['class' => 'form-control' . ($errors->has('entry_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de entrada']) }}
            {!! $errors->first('entry_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de salida') }}
            {{ Form::text('departure_date', $record->departure_date, ['class' => 'form-control' . ($errors->has('departure_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha de salida']) }}
            {!! $errors->first('departure_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id habitación') }}
            {{ Form::text('id_bedrooms', $record->id_bedrooms, ['class' => 'form-control' . ($errors->has('id_bedrooms') ? ' is-invalid' : ''), 'placeholder' => 'Id habitación']) }}
            {!! $errors->first('id_bedrooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>