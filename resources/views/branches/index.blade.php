@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Sucursales</h1>
    <a href="{{ route('branches.create') }}" class="btn btn-primary mb-3">Agregar Sucursal</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($branches as $branch)
                <tr>
                    <td>{{ $branch->id }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->address }}</td>
                    <td>
                        <a href="{{ route('branches.edit', $branch) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('branches.destroy', $branch) }}" method="POST" style="display:inline;">
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
