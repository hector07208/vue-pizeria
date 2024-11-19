<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts y estilos -->
</head>
<body>
    <div>
        @include('layouts.navigation') <!-- Esto incluye tu menú -->

        <header>
            @isset($header)
                {{ $header }} <!-- Este es el header que pasas desde las vistas -->
            @else
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }} <!-- Título por defecto si no se pasa -->
                </h2>
            @endisset
        </header>

        <main>
            @yield('content') 
        </main>
    </div>
</body>
</html>
