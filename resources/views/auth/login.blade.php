<x-guest-layout>

    <x-authentication-card>

        <x-slot name="logo">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                <h2 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                  Expertos <br />
                  <span style="color: hsl(0, 0%, 100%)">en construir Soluciones de software a medida</span>
                </h2>
                <p class="mb-4 opacity-70" style="color: hsl(0, 0%, 100%)">
                  Crear valor duradero en toda la empresa con la innovación tecnológica
                </p>
              </div>
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form style= 'width: 300px;' method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <h1 style= 'text-align:left; font-size:35px'>Inicio de Sesión</h1>
                <h1 style= 'text-align:left; font-size:10px'>Bienvenido</h1>
            </div>

            <div class="mt-10">
                <x-label for="email" value="{{ __('Usuario') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Recuerdame') }}</span>
                </label>
            </div>

            <div  class="flex items-left justify-center mt-4">
                <x-button class="ml-4">
                    {{ __('INGRESAR') }}
                </x-button>
            </div>
            <div class="mt-4">
                <h1 style= 'text-align:center; font-size:10px'>© 2023 Desarrollalab</h1>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
