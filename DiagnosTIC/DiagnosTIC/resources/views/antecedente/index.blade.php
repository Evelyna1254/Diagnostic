@extends('layouts.app')

@section('template_title')
    Antecedente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Antecedente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('antecedente.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Paciente</th>
										<th>Peso</th>
										<th>Estatura</th>
										<th>Presion</th>
										<th>Enfermedad Actuales</th>
										<th>Medicamentos</th>
										<th>Alergias</th>
										<th>Intervenciones Quirurgicas</th>
										<th>Transfuciones</th>
										<th>Antecedentes Familiares</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antecedentes as $antecedente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $antecedente->paciente->nombres }} {{ $antecedente->paciente->apellidos }}</td>
											<td>{{ $antecedente->peso }}</td>
											<td>{{ $antecedente->estatura }}</td>
											<td>{{ $antecedente->presion }}</td>
											<td>{{ $antecedente->enfermedad_actuales }}</td>
											<td>{{ $antecedente->medicamentos }}</td>
											<td>{{ $antecedente->alergias }}</td>
											<td>{{ $antecedente->intervenciones_quirurgicas }}</td>
											<td>{{ $antecedente->transfuciones }}</td>
											<td>{{ $antecedente->antecedentes_familiares }}</td>

                                            <td>
                                                <form action="{{ route('antecedente.destroy',$antecedente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('antecedente.show',$antecedente->id) }}"><i class="fa fa-fw fa-eye"></i> ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('antecedente.edit',$antecedente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $antecedentes->links() !!}
            </div>
        </div>
    </div>
@endsection
