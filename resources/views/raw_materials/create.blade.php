@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Materia Prima</h1>
    <form action="{{ route('raw_materials.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
