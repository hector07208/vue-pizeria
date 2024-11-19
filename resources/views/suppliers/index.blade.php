@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Proveedores</h1>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Agregar Proveedor</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Información de Contacto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->id }}</td>
                <td>{{ $supplier->name }}</td>
                <td>{{ $supplier->contact_info }}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
