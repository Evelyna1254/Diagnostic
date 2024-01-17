<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('agendaid') }}
            <select name="agendaid" id="agendaid" class="form-control"></select>
            <!-- {{ Form::text('agendaid', $consulta->agendaid, ['class' => 'form-control' . ($errors->has('agendaid') ? ' is-invalid' : ''), 'placeholder' => 'Agendaid']) }} -->
            {!! $errors->first('agendaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antecedenteid') }}
            <select name="antecedenteid" id="antecedenteid" class="form-control"></select>
            <!-- {{ Form::text('antecedenteid', $consulta->antecedenteid, ['class' => 'form-control' . ($errors->has('antecedenteid') ? ' is-invalid' : ''), 'placeholder' => 'Antecedenteid']) }} -->
            {!! $errors->first('antecedenteid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('profesionalid') }}
            <select name="profesionalid" id="profesionalid" class="form-control"></select>
            <!-- {{ Form::text('profesionalid', $consulta->profesionalid, ['class' => 'form-control' . ($errors->has('profesionalid') ? ' is-invalid' : ''), 'placeholder' => 'Profesionalid']) }} -->
            {!! $errors->first('profesionalid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('diagnostico') }}
            {{ Form::text('diagnostico', $consulta->diagnostico, ['class' => 'form-control' . ($errors->has('diagnostico') ? ' is-invalid' : ''), 'placeholder' => 'Diagnostico']) }}
            {!! $errors->first('diagnostico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $consulta->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>