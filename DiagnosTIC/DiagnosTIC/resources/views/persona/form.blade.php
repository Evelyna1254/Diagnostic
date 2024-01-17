<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $persona->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidos') }}
            {{ Form::text('apellidos', $persona->apellidos, ['class' => 'form-control' . ($errors->has('apellidos') ? ' is-invalid' : ''), 'placeholder' => 'Apellidos']) }}
            {!! $errors->first('apellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion') }}
            {{ Form::text('identificacion', $persona->identificacion, ['class' => 'form-control' . ($errors->has('identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nacimiento') }}
            {{ Form::text('fecha_nacimiento', $persona->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group" style="display: none;">
            {{ Form::label('tipo_persona') }}
            {{ Form::text('tipo_persona', $persona->tipo_persona, ['class' => 'form-control' . ($errors->has('tipo_persona') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Persona']) }}
            {!! $errors->first('tipo_persona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $persona->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_electronico') }}
            {{ Form::text('correo_electronico', $persona->correo_electronico, ['class' => 'form-control' . ($errors->has('correo_electronico') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('correo_electronico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Rh') }}
            {{ Form::text('Rh', $persona->Rh, ['class' => 'form-control' . ($errors->has('Rh') ? ' is-invalid' : ''), 'placeholder' => 'Rh']) }}
            {!! $errors->first('Rh', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $persona->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Género']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>