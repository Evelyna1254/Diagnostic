@extends('layouts.app')

@section('template_title')
    {{ $antecedente->name ?? 'Show Antecedente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Antecedente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('antecedente.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $antecedente->pacienteid }}
                        </div>
                        <div class="form-group">
                            <strong>Peso:</strong>
                            {{ $antecedente->peso }}
                        </div>
                        <div class="form-group">
                            <strong>Estatura:</strong>
                            {{ $antecedente->estatura }}
                        </div>
                        <div class="form-group">
                            <strong>Presion:</strong>
                            {{ $antecedente->presion }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedad Actuales:</strong>
                            {{ $antecedente->enfermedad_actuales }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamentos:</strong>
                            {{ $antecedente->medicamentos }}
                        </div>
                        <div class="form-group">
                            <strong>Alergias:</strong>
                            {{ $antecedente->alergias }}
                        </div>
                        <div class="form-group">
                            <strong>Intervenciones Quirurgicas:</strong>
                            {{ $antecedente->intervenciones_quirurgicas }}
                        </div>
                        <div class="form-group">
                            <strong>Transfuciones:</strong>
                            {{ $antecedente->transfuciones }}
                        </div>
                        <div class="form-group">
                            <strong>Antecedentes Familiares:</strong>
                            {{ $antecedente->antecedentes_familiares }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
