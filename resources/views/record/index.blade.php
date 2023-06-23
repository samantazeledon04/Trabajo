@extends('layouts.app')

@section('template_title')
    Record
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Datos de los pacientes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('records.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo') }}
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
                                        
										<th>Id Hospital</th>
										<th>Número de cédula</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Fecha de cumpleaños</th>
										<th>Género</th>
										<th>Número de seguridad</th>
										<th>Dirección</th>
										<th>Correo</th>
										<th>Especialidad</th>
										<th>Número de télefono</th>
										<th>Número de emergencia</th>
										<th>Fecha de entrada</th>
										<th>Fecha de salida</th>
										<th>Id habitación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $record)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $record->id_hospitals }}</td>
											<td>{{ $record->identity_card }}</td>
											<td>{{ $record->names }}</td>
											<td>{{ $record->surnames }}</td>
											<td>{{ $record->birthdate }}</td>
											<td>{{ $record->gender }}</td>
											<td>{{ $record->security_number }}</td>
											<td>{{ $record->address }}</td>
											<td>{{ $record->mail }}</td>
											<td>{{ $record->specialty }}</td>
											<td>{{ $record->phone_number }}</td>
											<td>{{ $record->emergency_number }}</td>
											<td>{{ $record->entry_date }}</td>
											<td>{{ $record->departure_date }}</td>
											<td>{{ $record->id_bedrooms }}</td>

                                            <td>
                                                <form action="{{ route('records.destroy',$record->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('records.show',$record->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('records.edit',$record->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $records->links() !!}
            </div>
        </div>
    </div>
@endsection
