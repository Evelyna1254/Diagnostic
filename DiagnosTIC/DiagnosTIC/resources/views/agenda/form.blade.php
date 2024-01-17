<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('descripcion_cita') }}
            {{ Form::text('descripcion_cita', $agenda->descripcion_cita, ['class' => 'form-control' . ($errors->has('descripcion_cita') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion Cita']) }}
            {!! $errors->first('descripcion_cita', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $agenda->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_inicio') }}
            {{ Form::text('hora_inicio', $agenda->hora_inicio, ['class' => 'form-control' . ($errors->has('hora_inicio') ? ' is-invalid' : ''), 'placeholder' => 'Hora Inicio']) }}
            {!! $errors->first('hora_inicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora_fin') }}
            {{ Form::text('hora_fin', $agenda->hora_fin, ['class' => 'form-control' . ($errors->has('hora_fin') ? ' is-invalid' : ''), 'placeholder' => 'Hora Fin']) }}
            {!! $errors->first('hora_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>