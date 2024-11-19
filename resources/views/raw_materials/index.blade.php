@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Materias Primas</h1>
    <a href="{{ route('raw_materials.create') }}" class="btn btn-primary">Agregar Nueva Materia Prima</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->name }}</td>
                    <td>{{ $material->quantity }}</td>
                    <td>
                        <a href="{{ route('raw_materials.edit', $material) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('raw_materials.destroy', $material) }}" method="POST" style="display:inline;">
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
