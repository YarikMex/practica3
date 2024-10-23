<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    use HasFactory;

    // Especificar los campos que pueden ser llenados masivamente
    protected $fillable = [
        'nombreMateria',
        'nivel',
        'nombreMediano',
        'nombreCorto',
        'modalidad',
        'idReticula',
    ];

    // Relación con la retícula
    public function reticula(): BelongsTo
    {
        return $this->belongsTo(Reticula::class, 'idReticula');
    }

    // Validaciones de nivel y modalidad (opcional, depende si quieres agregar métodos de validación)
    public static function niveles()
    {
        return ['L', 'M']; // L para Licenciatura, M para Maestría
    }

    public static function modalidades()
    {
        return ['P', 'E']; // P para Presencial, E para En línea
    }
}
