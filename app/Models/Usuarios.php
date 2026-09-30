<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Usuarios as Authenticatable;

class Usuarios extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'nombre_user',
        'email', 
        'password'
    ];
}
