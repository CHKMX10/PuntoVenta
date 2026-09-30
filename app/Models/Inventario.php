<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $fillable=[
        'marca',
        'num_serie',
        'procesador',
        'ram',
        'cap_memoria',
        'slots',
        'precio',
        'stock'
    ];
}
