<form action="{{ route('branches.store') }}" method="POST">
    @csrf <!-- Este es el token CSRF -->
    <div class="mb-3">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required>
    </div>
    <div class="mb-3">
        <label for="address">Dirección:</label>
        <input type="text" name="address" required>
    </div>
    <button type="submit">Crear Sucursal</button>
</form>
