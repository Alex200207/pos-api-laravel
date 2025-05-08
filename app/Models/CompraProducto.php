<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompraProducto extends Model
{
    protected $table = 'compra_producto';

    protected $fillable = [
        'producto_id',
        'compra_id',
        'cantidad',
        'precio_unitario',
    ];
}
