<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrera extends Model
{
    use HasFactory;

    // Especificar los campos que pueden ser llenados masivamente
    protected $fillable = [
        'nombreCarrera',
        'nombreMediano',
        'nombreCorto',
        'depto_id', // Relación con el ID del departamento
    ];

    // Especificar la clave primaria (por defecto Laravel usa 'id', por lo que no es necesario especificarlo)
    protected $primaryKey = 'id';

    // Relación con el modelo Depto
    public function depto()
    {
        return $this->belongsTo(Depto::class, 'depto_id', 'idDepto');
    }
    

    // Relación con el modelo Alumno
    public function alumnos(): HasMany
    {
        return $this->hasMany(Alumno::class);
    }
}
