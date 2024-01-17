@extends('layouts.app')

@section('template_title')
    {{ $receta->name ?? 'Show Receta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Receta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('receta.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Profesionalid:</strong>
                            {{ $receta->profesionalid }}
                        </div>
                        <div class="form-group">
                            <strong>Pacienteid:</strong>
                            {{ $receta->pacienteid }}
                        </div>
                        <div class="form-group">
                            <strong>Medicamento:</strong>
                            {{ $receta->medicamento }}
                        </div>
                        <div class="form-group">
                            <strong>Pautas:</strong>
                            {{ $receta->pautas }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $receta->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
