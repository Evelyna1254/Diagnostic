@extends('layouts.app')

@section('template_title')
    Persona
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Persona') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('persona.create') }}/{{$tipo}}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                                        
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Identificacion</th>
										<th>Fecha Nacimiento</th>
										<!-- <th>Tipo Persona</th> -->
										<th>Telefono</th>
										<th>Correo Electronico</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personas as $persona)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $persona->nombres }}</td>
											<td>{{ $persona->apellidos }}</td>
											<td>{{ $persona->identificacion }}</td>
											<td>{{ $persona->fecha_nacimiento }}</td>
											<!-- <td>{{ $persona->tipo_persona }}</td> -->
											<td>{{ $persona->telefono }}</td>
											<td>{{ $persona->correo_electronico }}</td>

                                            <td>
                                                <form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('persona.show',$persona->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('persona.edit',$persona->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $personas->links() !!}
            </div>
        </div>
    </div>
@endsection
