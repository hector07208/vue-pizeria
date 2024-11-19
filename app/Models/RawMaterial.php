<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Nombre del material
        'quantity', // Cantidad disponible
        'supplier_id', // Relación con el proveedor
    ];

    // Aquí puedes definir relaciones con otros modelos
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
