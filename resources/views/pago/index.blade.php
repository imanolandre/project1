<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Pago') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('pagos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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

                                                <th>Nombre</th>
                                                <th>Moneda</th>
                                                <th>Metododepago</th>
                                                <th>Proyecto</th>
                                                <th>Formadepago</th>
                                                <th>Facturar</th>
                                                <th>Subtotal</th>
                                                <th>Iva</th>
                                                <th>Imputrasladados</th>
                                                <th>Impuretenidos</th>
                                                <th>Total</th>
                                                <th>Observaciones</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pagos as $pago)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $pago->nombre }}</td>
                                                    <td>{{ $pago->moneda }}</td>
                                                    <td>{{ $pago->metododepago }}</td>
                                                    <td>{{ $pago->proyecto }}</td>
                                                    <td>{{ $pago->formadepago }}</td>
                                                    <td>{{ $pago->facturar }}</td>
                                                    <td>{{ $pago->subtotal }}</td>
                                                    <td>{{ $pago->iva }}</td>
                                                    <td>{{ $pago->imputrasladados }}</td>
                                                    <td>{{ $pago->impuretenidos }}</td>
                                                    <td>{{ $pago->total }}</td>
                                                    <td>{{ $pago->observaciones }}</td>

                                                    <td>
                                                        <form action="{{ route('pagos.destroy',$pago->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('pagos.show',$pago->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('pagos.edit',$pago->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $pagos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

