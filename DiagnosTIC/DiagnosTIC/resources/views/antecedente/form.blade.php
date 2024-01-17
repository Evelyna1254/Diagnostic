<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('pacienteid') }}
            <!-- {{ Form::text('pacienteid', $antecedente->pacienteid, ['class' => 'form-control' . ($errors->has('pacienteid') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }} -->
            <select name="pacienteid" id="pacienteid" class="form-control"></select>
            {!! $errors->first('pacienteid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $antecedente->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatura') }}
            {{ Form::text('estatura', $antecedente->estatura, ['class' => 'form-control' . ($errors->has('estatura') ? ' is-invalid' : ''), 'placeholder' => 'Estatura']) }}
            {!! $errors->first('estatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('presion') }}
            {{ Form::text('presion', $antecedente->presion, ['class' => 'form-control' . ($errors->has('presion') ? ' is-invalid' : ''), 'placeholder' => 'Presion']) }}
            {!! $errors->first('presion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('enfermedad_actuales') }}
            {{ Form::text('enfermedad_actuales', $antecedente->enfermedad_actuales, ['class' => 'form-control' . ($errors->has('enfermedad_actuales') ? ' is-invalid' : ''), 'placeholder' => 'Enfermedad Actuales']) }}
            {!! $errors->first('enfermedad_actuales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medicamentos') }}
            {{ Form::text('medicamentos', $antecedente->medicamentos, ['class' => 'form-control' . ($errors->has('medicamentos') ? ' is-invalid' : ''), 'placeholder' => 'Medicamentos']) }}
            {!! $errors->first('medicamentos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alergias') }}
            {{ Form::text('alergias', $antecedente->alergias, ['class' => 'form-control' . ($errors->has('alergias') ? ' is-invalid' : ''), 'placeholder' => 'Alergias']) }}
            {!! $errors->first('alergias', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('intervenciones_quirurgicas') }}
            {{ Form::text('intervenciones_quirurgicas', $antecedente->intervenciones_quirurgicas, ['class' => 'form-control' . ($errors->has('intervenciones_quirurgicas') ? ' is-invalid' : ''), 'placeholder' => 'Intervenciones Quirurgicas']) }}
            {!! $errors->first('intervenciones_quirurgicas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('transfuciones') }}
            {{ Form::text('transfuciones', $antecedente->transfuciones, ['class' => 'form-control' . ($errors->has('transfuciones') ? ' is-invalid' : ''), 'placeholder' => 'Transfuciones']) }}
            {!! $errors->first('transfuciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antecedentes_familiares') }}
            {{ Form::text('antecedentes_familiares', $antecedente->antecedentes_familiares, ['class' => 'form-control' . ($errors->has('antecedentes_familiares') ? ' is-invalid' : ''), 'placeholder' => 'Antecedentes Familiares']) }}
            {!! $errors->first('antecedentes_familiares', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>