<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id habitación') }}
            {{ Form::text('id_rooms', $doctor->id_rooms, ['class' => 'form-control' . ($errors->has('id_rooms') ? ' is-invalid' : ''), 'placeholder' => 'id habitación']) }}
            {!! $errors->first('id_rooms', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de cédula') }}
            {{ Form::text('identity_card', $doctor->identity_card, ['class' => 'form-control' . ($errors->has('identity_card') ? ' is-invalid' : ''), 'placeholder' => 'Número de cédula']) }}
            {!! $errors->first('identity_card', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('names', $doctor->names, ['class' => 'form-control' . ($errors->has('names') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('surnames', $doctor->surnames, ['class' => 'form-control' . ($errors->has('surnames') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('surnames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año de nacimiento') }}
            {{ Form::text('birthdate', $doctor->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Año de nacimiento']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Género') }}
            {{ Form::text('gender', $doctor->gender, ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de INSS') }}
            {{ Form::text('form', $doctor->form, ['class' => 'form-control' . ($errors->has('form') ? ' is-invalid' : ''), 'placeholder' => 'Número de INSS']) }}
            {!! $errors->first('form', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('address', $doctor->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Dirección']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('mail', $doctor->mail, ['class' => 'form-control' . ($errors->has('mail') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Especialidad') }}
            {{ Form::text('specialty', $doctor->specialty, ['class' => 'form-control' . ($errors->has('specialty') ? ' is-invalid' : ''), 'placeholder' => 'Especialidad']) }}
            {!! $errors->first('specialty', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>