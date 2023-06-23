@extends('layouts.app')

@section('template_title')
    Tool
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Herramientas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tools.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Cantidad</th>
										<th>Id hospital</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tools as $tool)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tool->name }}</td>
											<td>{{ $tool->lot }}</td>
											<td>{{ $tool->id_hospitals }}</td>

                                            <td>
                                                <form action="{{ route('tools.destroy',$tool->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tools.show',$tool->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tools.edit',$tool->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $tools->links() !!}
            </div>
        </div>
    </div>
@endsection
