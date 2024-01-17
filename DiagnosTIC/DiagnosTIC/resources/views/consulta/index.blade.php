@extends('layouts.app')

@section('template_title')
    Consulta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consulta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consulta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nueva') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Agenda</th>
										<th>Paciente</th>
										<th>Profesional</th>
										<th>Diagnostico</th>
										<th>Observaciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultas as $consulta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consulta->agenda->descripcion_cita }}</td>
											<td>{{ $consulta->antecedente->paciente->nombres }} {{ $consulta->antecedente->paciente->apellidos }}</td>
											<td>{{ $consulta->profesional->nombres }} {{ $consulta->profesional->apellidos }}</td>
											<td>{{ $consulta->diagnostico }}</td>
											<td>{{ $consulta->observaciones }}</td>

                                            <td>
                                                <form action="{{ route('consulta.destroy',$consulta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consulta.show',$consulta->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consulta.edit',$consulta->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Elimnar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $consultas->links() !!}
            </div>
        </div>
    </div>
@endsection
