<?php
public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('email')->unique()->after('id'); // Agregar la columna 'email'
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('email'); // Eliminar la columna 'email' si es necesario
    });
}
