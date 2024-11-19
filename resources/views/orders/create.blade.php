@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Pedido</h1>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select name="client_id" class="form-control" required>
                <option value="">Seleccionar Cliente</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="total_price">Total</label>
            <input type="number" name="total_price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="status">Estado</label>
            <select name="status" class="form-control" required>
                <option value="pendiente">Pendiente</option>
                <option value="en_preparacion">En Preparación</option>
                <option value="listo">Listo</option>
                <option value="entregado">Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
