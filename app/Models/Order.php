<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['client_id', 'total_price', 'status'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}