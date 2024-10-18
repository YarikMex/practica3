<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    use HasFactory;

    // Ya no es necesario desactivar el autoincrement ni definir el tipo de clave primaria

    protected $fillable = [
        'nombrePuesto',
        'tipoPuesto',
    ];

    // Puedes seguir agregando las relaciones si es necesario
}

