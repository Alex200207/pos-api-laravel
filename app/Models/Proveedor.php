<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proveedor extends Model
{
    use HasFactory;

    public $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];


    protected $table = 'proveedores';
}

