@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Pedido</h1>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select name="client_id" class="form-control" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ $client->id == $order->client_id ? 'selected' : '' }}>{{ $client->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="total_price">Total</label>
            <input type="number" name="total_price" class="form-control" step="0.01" value="{{ $order->total_price }}" required>
        </div>

        <div class="form-group">
            <label for="status">Estado</label>
            <select name="status" class="form-control" required>
                <option value="pendiente" {{ $order->status == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en_preparacion" {{ $order->status == 'en_preparacion' ? 'selected' : '' }}>En Preparación</option>
                <option value="listo" {{ $order->status == 'listo' ? 'selected' : '' }}>Listo</option>
                <option value="entregado" {{ $order->status == 'entregado' ? 'selected' : '' }}>Entregado</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection


