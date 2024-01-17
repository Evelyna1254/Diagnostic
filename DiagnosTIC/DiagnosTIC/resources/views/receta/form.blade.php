<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('profesionalid') }}
            <!-- {{ Form::text('profesionalid', $receta->profesionalid, ['class' => 'form-control' . ($errors->has('profesionalid') ? ' is-invalid' : ''), 'placeholder' => 'Profesionalid']) }} -->
            <select name="profesionalid" id="profesionalid" class="form-control" value="{{$receta->profesionalid}}"></select>
            {!! $errors->first('profesionalid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pacienteid') }}
            <!-- {{ Form::text('pacienteid', $receta->pacienteid, ['class' => 'form-control' . ($errors->has('pacienteid') ? ' is-invalid' : ''), 'placeholder' => 'Pacienteid']) }} -->
            <select name="pacienteid" id="pacienteid" class="form-control"></select>
            {!! $errors->first('pacienteid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('medicamento') }}
            {{ Form::text('medicamento', $receta->medicamento, ['class' => 'form-control' . ($errors->has('medicamento') ? ' is-invalid' : ''), 'placeholder' => 'Medicamento']) }}
            {!! $errors->first('medicamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pautas') }}
            {{ Form::text('pautas', $receta->pautas, ['class' => 'form-control' . ($errors->has('pautas') ? ' is-invalid' : ''), 'placeholder' => 'Pautas']) }}
            {!! $errors->first('pautas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $receta->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>