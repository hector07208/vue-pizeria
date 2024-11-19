@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <p><strong>ID:</strong> {{ $client->id }}</p>
    <p><strong>Nombre:</strong> {{ $client->name }}</p>
    <p><strong>Dirección:</strong> {{ $client->address }}</p>
    <p><strong>Teléfono:</strong> {{ $client->phone }}</p>
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Regresar</a>
</div>
@endsection
