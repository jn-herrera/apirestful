<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const producto_disponible = 'disponible';
    const producto_no_disponible = 'no disponible';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'

    ];

    public function estaDisponible()
    {
        return $this->status == Product::producto_disponible;

    }
}
