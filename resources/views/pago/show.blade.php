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
                                    <span class="card-title">{{ __('Show') }} Pago</span>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('pagos.index') }}"> {{ __('Back') }}</a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $pago->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Moneda:</strong>
                                    {{ $pago->moneda }}
                                </div>
                                <div class="form-group">
                                    <strong>Metododepago:</strong>
                                    {{ $pago->metododepago }}
                                </div>
                                <div class="form-group">
                                    <strong>Proyecto:</strong>
                                    {{ $pago->proyecto }}
                                </div>
                                <div class="form-group">
                                    <strong>Formadepago:</strong>
                                    {{ $pago->formadepago }}
                                </div>
                                <div class="form-group">
                                    <strong>Facturar:</strong>
                                    {{ $pago->facturar }}
                                </div>
                                <div class="form-group">
                                    <strong>Subtotal:</strong>
                                    {{ $pago->subtotal }}
                                </div>
                                <div class="form-group">
                                    <strong>Iva:</strong>
                                    {{ $pago->iva }}
                                </div>
                                <div class="form-group">
                                    <strong>Imputrasladados:</strong>
                                    {{ $pago->imputrasladados }}
                                </div>
                                <div class="form-group">
                                    <strong>Impuretenidos:</strong>
                                    {{ $pago->impuretenidos }}
                                </div>
                                <div class="form-group">
                                    <strong>Total:</strong>
                                    {{ $pago->total }}
                                </div>
                                <div class="form-group">
                                    <strong>Observaciones:</strong>
                                    {{ $pago->observaciones }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>

