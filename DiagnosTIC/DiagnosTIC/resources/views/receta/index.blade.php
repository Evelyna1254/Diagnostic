@extends('layouts.app')

@section('template_title')
    Receta
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Receta') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('receta.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
                                        
										<th>Profesional</th>
										<th>Paciente</th>
										<th>Medicamento</th>
										<th>Pautas</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recetas as $receta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $receta->profesional->nombres }} {{ $receta->profesional->apellidos }}</td>
											<td>{{ $receta->paciente->nombres }} {{ $receta->paciente->apellidos }}</td>
											<td>{{ $receta->medicamento }}</td>
											<td>{{ $receta->pautas }}</td>
											<td>{{ $receta->fecha }}</td>

                                            <td>
                                                <form action="{{ route('receta.destroy',$receta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('receta.show',$receta->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <!-- <a class="btn btn-sm btn-success" href="{{ route('receta.edit',$receta->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> -->
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
                {!! $recetas->links() !!}
            </div>
        </div>
    </div>
@endsection
