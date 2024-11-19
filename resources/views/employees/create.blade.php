@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Empleado</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Posición</label>
            <input type="text" name="position" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="identification_number" class="form-label">Número de Identificación</label>
            <input type="text" name="identification_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salario</label>
            <input type="number" name="salary" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hire_date" class="form-label">Fecha de Contratación</label>
            <input type="date" name="hire_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
