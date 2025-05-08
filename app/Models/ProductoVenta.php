<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{

    protected $table = 'producto_venta';


    protected $fillable = [
        'producto_id',
        'venta_id',
        'cantidad',
        'precio_unitario',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'venta_id');
    }
}
