@extends('layouts.app')

@section('template_title')
    Doctor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('doctors.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>id habitación</th>
										<th>Número de cédula</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Año de nacimiento</th>
										<th>Género</th>
										<th>INSS</th>
										<th>Dirección</th>
										<th>Correo</th>
										<th>Especialidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $doctor->id_rooms }}</td>
											<td>{{ $doctor->identity_card }}</td>
											<td>{{ $doctor->names }}</td>
											<td>{{ $doctor->surnames }}</td>
											<td>{{ $doctor->birthdate }}</td>
											<td>{{ $doctor->gender }}</td>
											<td>{{ $doctor->form }}</td>
											<td>{{ $doctor->address }}</td>
											<td>{{ $doctor->mail }}</td>
											<td>{{ $doctor->specialty }}</td>

                                            <td>
                                                <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('doctors.show',$doctor->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('doctors.edit',$doctor->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $doctors->links() !!}
            </div>
        </div>
    </div>
@endsection
