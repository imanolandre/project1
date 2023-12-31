<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left">
                                    <span class="card-title">{{ __('Show') }} Cliente</span>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('clientes.index') }}"> {{ __('Back') }}</a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <strong>Nombrecliente:</strong>
                                    {{ $cliente->nombrecliente }}
                                </div>
                                <div class="form-group">
                                    <strong>Correo:</strong>
                                    {{ $cliente->correo }}
                                </div>
                                <div class="form-group">
                                    <strong>Teléfono:</strong>
                                    {{ $cliente->teléfono }}
                                </div>
                                <div class="form-group">
                                    <strong>Empresa:</strong>
                                    {{ $cliente->empresa }}
                                </div>
                                <div class="form-group">
                                    <strong>Sitioweb:</strong>
                                    {{ $cliente->sitioweb }}
                                </div>
                                <div class="form-group">
                                    <strong>Dirección:</strong>
                                    {{ $cliente->dirección }}
                                </div>
                                <div class="form-group">
                                    <strong>Razónsocial:</strong>
                                    {{ $cliente->razónsocial }}
                                </div>
                                <div class="form-group">
                                    <strong>Rfc:</strong>
                                    {{ $cliente->rfc }}
                                </div>
                                <div class="form-group">
                                    <strong>Direcciónfiscal:</strong>
                                    {{ $cliente->direcciónfiscal }}
                                </div>
                                <div class="form-group">
                                    <strong>Codigopostal:</strong>
                                    {{ $cliente->codigopostal }}
                                </div>
                                <div class="form-group">
                                    <strong>Regimenincorporación:</strong>
                                    {{ $cliente->regimenincorporación }}
                                </div>
                                <div class="form-group">
                                    <strong>Constanciasituaciónfiscal:</strong>
                                    {{ $cliente->constanciasituaciónFiscal }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>

