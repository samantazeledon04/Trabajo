@extends('layouts.app')

@section('template_title')
    Bed
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Camas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('beds.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Habitación</th>
										<th>Número</th>
										<th>Particularidad</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($beds as $bed)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bed->id_bedrooms }}</td>
											<td>{{ $bed->number }}</td>
											<td>{{ $bed->particularity }}</td>
											<td>{{ $bed->state }}</td>

                                            <td>
                                                <form action="{{ route('beds.destroy',$bed->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('beds.show',$bed->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('beds.edit',$bed->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $beds->links() !!}
            </div>
        </div>
    </div>
@endsection
