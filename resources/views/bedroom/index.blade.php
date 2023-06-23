@extends('layouts.app')

@section('template_title')
    Bedroom
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Habitaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bedrooms.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nueva') }}
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
                                        
										<th>Id habitación</th>
										<th>Número</th>
										<th>Capacidad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bedrooms as $bedroom)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bedroom->id_rooms }}</td>
											<td>{{ $bedroom->number }}</td>
											<td>{{ $bedroom->ability }}</td>

                                            <td>
                                                <form action="{{ route('bedrooms.destroy',$bedroom->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bedrooms.show',$bedroom->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bedrooms.edit',$bedroom->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $bedrooms->links() !!}
            </div>
        </div>
    </div>
@endsection
