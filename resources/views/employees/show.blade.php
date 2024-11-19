@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Empleado</h1>

    <p><strong>ID:</strong> {{ $employee->id }}</p>
    <p><strong>Nombre:</strong> {{ $employee->name }}</p>
    <p><strong>Posición:</strong> {{ $employee->position }}</p>
    <p><strong>Número de Identificación:</strong> {{ $employee->identification_number }}</p>
    <p><strong>Salario:</strong> {{ $employee->salary }}</p>
    <p><strong>Fecha de Contratación:</strong> {{ $employee->hire_date }}</p>

    <a href="{{ route('employees.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
