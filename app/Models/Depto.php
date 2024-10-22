<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depto extends Model
{
    use HasFactory;

    // Especificar la clave primaria
    protected $primaryKey = 'idDepto'; 

    // Si no usas 'id' como clave primaria, asegurarte que no es auto-incremental (opcional)
    public $incrementing = true; // Solo si tu idDepto es auto-incremental, mantenlo en true

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'nombredepto',
        'nombremediano',
        'nombrecorto',
    ];

    // Relación: Un departamento tiene muchas carreras
    public function carreras(): HasMany
    {
        return $this->hasMany(Carrera::class);
    }
}
