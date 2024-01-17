@extends('layouts.app')

@section('template_title')
    Agenda
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agenda') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('agenda.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Descripcion Cita</th>
										<th>Fecha</th>
										<th>Hora Inicio</th>
										<th>Hora Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($agendas as $agenda)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $agenda->descripcion_cita }}</td>
											<td>{{ $agenda->fecha }}</td>
											<td>{{ $agenda->hora_inicio }}</td>
											<td>{{ $agenda->hora_fin }}</td>

                                            <td>
                                                <form action="{{ route('agenda.destroy',$agenda->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('agenda.show',$agenda->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('agenda.edit',$agenda->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $agendas->links() !!}
            </div>
        </div>
    </div>
@endsection
