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
                                        {{ __('Proyecto') }}
                                    </span>

                                     <div class="float-right">
                                        <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                                <th>Tipo</th>
                                                <th>Cotización</th>
                                                <th>Fechainicio</th>
                                                <th>Fechafin</th>
                                                <th>Prototipo</th>
                                                <th>Requerimientos</th>
                                                <th>Descripción</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($proyectos as $proyecto)
                                                <tr>
                                                    <td>{{ ++$i }}</td>

                                                    <td>{{ $proyecto->nombre }}</td>
                                                    <td>{{ $proyecto->tipo }}</td>
                                                    <td>{{ $proyecto->cotización }}</td>
                                                    <td>{{ $proyecto->fechainicio }}</td>
                                                    <td>{{ $proyecto->fechafin }}</td>
                                                    <td>{{ $proyecto->prototipo }}</td>
                                                    <td>{{ $proyecto->requerimientos }}</td>
                                                    <td>{{ $proyecto->descripción }}</td>

                                                    <td>
                                                        <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                            <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                        {!! $proyectos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

