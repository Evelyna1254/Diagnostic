@extends('layouts.app')

@section('template_title')
    {{ $agenda->name ?? 'Show Agenda' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Agenda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('agenda.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion Cita:</strong>
                            {{ $agenda->descripcion_cita }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $agenda->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $agenda->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $agenda->hora_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
