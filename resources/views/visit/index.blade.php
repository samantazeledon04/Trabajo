@extends('layouts.app')

@section('template_title')
    Visit
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Visitas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('visits.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id paciente</th>
										<th>Id doctor</th>
										<th>Fecha</th>
										<th>Diagnóstico</th>
										<th>Tratamientos</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($visits as $visit)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $visit->id_records }}</td>
											<td>{{ $visit->id_doctors }}</td>
											<td>{{ $visit->date }}</td>
											<td>{{ $visit->diagnostic }}</td>
											<td>{{ $visit->treatments }}</td>

                                            <td>
                                                <form action="{{ route('visits.destroy',$visit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('visits.show',$visit->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('visits.edit',$visit->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $visits->links() !!}
            </div>
        </div>
    </div>
@endsection
