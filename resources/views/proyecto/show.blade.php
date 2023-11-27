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
                                    <span class="card-title">{{ __('Show') }} Proyecto</span>
                                </div>
                                <div class="float-right">
                                    <a class="btn btn-primary" href="{{ route('proyectos.index') }}"> {{ __('Back') }}</a>
                                </div>
                            </div>

                            <div class="card-body">

                                <div class="form-group">
                                    <strong>Nombre:</strong>
                                    {{ $proyecto->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Tipo:</strong>
                                    {{ $proyecto->tipo }}
                                </div>
                                <div class="form-group">
                                    <strong>Cotización:</strong>
                                    {{ $proyecto->cotización }}
                                </div>
                                <div class="form-group">
                                    <strong>Fechainicio:</strong>
                                    {{ $proyecto->fechainicio }}
                                </div>
                                <div class="form-group">
                                    <strong>Fechafin:</strong>
                                    {{ $proyecto->fechafin }}
                                </div>
                                <div class="form-group">
                                    <strong>Prototipo:</strong>
                                    {{ $proyecto->prototipo }}
                                </div>
                                <div class="form-group">
                                    <strong>Requerimientos:</strong>
                                    {{ $proyecto->requerimientos }}
                                </div>
                                <div class="form-group">
                                    <strong>Descripción:</strong>
                                    {{ $proyecto->descripción }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>

