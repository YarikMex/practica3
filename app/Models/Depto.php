<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depto extends Model
{
    use HasFactory;

    // Especificar la clave primaria personalizada
    protected $primaryKey = 'idDepto'; 
    public $incrementing = true; // Clave primaria es auto-incremental
    protected $keyType = 'int';  // Tipo de la clave primaria es 'int'

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
