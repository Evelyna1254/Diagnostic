@extends('layouts.app')

@section('template_title')
    {{ $consulta->name ?? 'Show Consulta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Consulta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consulta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Agendaid:</strong>
                            {{ $consulta->agendaid }}
                        </div>
                        <div class="form-group">
                            <strong>Antecedenteid:</strong>
                            {{ $consulta->antecedenteid }}
                        </div>
                        <div class="form-group">
                            <strong>Profesionalid:</strong>
                            {{ $consulta->profesionalid }}
                        </div>
                        <div class="form-group">
                            <strong>Diagnostico:</strong>
                            {{ $consulta->diagnostico }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $consulta->observaciones }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
