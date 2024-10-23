<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Model
{
    use HasFactory;

    // Incluir todos los campos que pueden ser llenados masivamente
    protected $fillable = [
        'noctrl',          // Este campo faltaba
        'nombre',
        'apellidopaterno',
        'apellidomaterno', // Este campo también faltaba
        'sexo',            // Este campo también faltaba
        'carrera_id',      // Carrera relacionada con alumno
    ];

    // Relación con Carrera
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'carrera_id', 'id');
    }
}
