<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    // Especificar los campos que pueden ser llenados masivamente
    protected $fillable = [
        'periodo',
        'descCorta',
        'FechaIni',
        'FechaFin',
    ];

    // Si deseas añadir relaciones o métodos, puedes hacerlo aquí
}
