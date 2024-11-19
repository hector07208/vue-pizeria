<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Menú Lateral -->
            <nav class="bg-gray-200 w-1/4 p-4 rounded-lg">
                <ul>
                    <!-- Enlaces del menú lateral -->
                </ul>
            </nav>

            <!-- Contenido Principal -->
            <div class="w-3/4 pl-4">
                <div class="bg-white shadow-md sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold">{{ __('Lista de Sucursales') }}</h3>
                    <a href="#" class="text-blue-500">Agregar Sucursal</a>
                    <!-- Tabla de Sucursales -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
