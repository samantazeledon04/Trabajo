@extends('layouts.app')

@section('template_title')
    Quote
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Agenda de citas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('quotes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agendar nueva') }}
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
                                        
										<th>Id Paciente</th>
										<th>Id Servicio</th>
										<th>Fecha</th>
										<th>Razón</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quotes as $quote)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $quote->id_records }}</td>
											<td>{{ $quote->id_services }}</td>
											<td>{{ $quote->date }}</td>
											<td>{{ $quote->reason }}</td>

                                            <td>
                                                <form action="{{ route('quotes.destroy',$quote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('quotes.show',$quote->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('quotes.edit',$quote->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $quotes->links() !!}
            </div>
        </div>
    </div>
@endsection
