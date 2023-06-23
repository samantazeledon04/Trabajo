<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_hospitals') }}
            {{ Form::text('id_hospital', $service->id_hospitals, ['class' => 'form-control' . ($errors->has('id_hospitals') ? ' is-invalid' : ''), 'placeholder' => 'Id Hospital']) }}
            {!! $errors->first('id_hospitals', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_doctors') }}
            {{ Form::text('id_doctor', $service->id_doctors, ['class' => 'form-control' . ($errors->has('id_doctors') ? ' is-invalid' : ''), 'placeholder' => 'Id Doctor']) }}
            {!! $errors->first('id_doctors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del servicio') }}
            {{ Form::text('name', $service->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre completo del servicio']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('description', $service->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Describa el servicio']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Comentario') }}
            {{ Form::text('comment', $service->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Añada un comentario']) }}
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Agregar') }}</button>
    </div>
</div>