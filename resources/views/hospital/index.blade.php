@extends('layouts.app')

@section('template_title')
    Hospital
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hospital') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('hospitals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir uno nuevo') }}
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
                                        
										<th>Nombre</th>
										<th>Ubicación</th>
										<th>Número de contacto</th>
										<th>Correo</th>
										<th>Encargado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospitals as $hospital)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $hospital->name }}</td>
											<td>{{ $hospital->location }}</td>
											<td>{{ $hospital->contact }}</td>
											<td>{{ $hospital->mail }}</td>
											<td>{{ $hospital->manager }}</td>

                                            <td>
                                                <form action="{{ route('hospitals.destroy',$hospital->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('hospitals.show',$hospital->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('hospitals.edit',$hospital->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $hospitals->links() !!}
            </div>
        </div>
    </div>
@endsection
