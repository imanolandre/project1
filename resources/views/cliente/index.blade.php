@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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

										<th>Nombrecliente</th>
										<th>Correo</th>
										<th>Teléfono</th>
										<th>Empresa</th>
										<th>Sitioweb</th>
										<th>Dirección</th>
										<th>Razónsocial</th>
										<th>Rfc</th>
										<th>Direcciónfiscal</th>
										<th>Codigopostal</th>
										<th>Regimenincorporación</th>
										<th>Constanciasituaciónfiscal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $cliente->nombrecliente }}</td>
											<td>{{ $cliente->correo }}</td>
											<td>{{ $cliente->teléfono }}</td>
											<td>{{ $cliente->empresa }}</td>
											<td>{{ $cliente->sitioweb }}</td>
											<td>{{ $cliente->dirección }}</td>
											<td>{{ $cliente->razónsocial }}</td>
											<td>{{ $cliente->rfc }}</td>
											<td>{{ $cliente->direcciónfiscal }}</td>
											<td>{{ $cliente->codigopostal }}</td>
											<td>{{ $cliente->regimenincorporación }}</td>
											<td>{{ $cliente->constanciasituaciónFiscal }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
