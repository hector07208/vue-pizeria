@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Materia Prima</h1>
    <form action="{{ route('raw_materials.update', $rawMaterial) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $rawMaterial->name }}" required>
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" name="quantity" class="form-control" value="{{ $rawMaterial->quantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
