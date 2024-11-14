<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reticula extends Model
{
    use HasFactory;

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'descripcion',
        'fechaEnVigor',
        'idCarrera',
    ];

    // Relación con la carrera
    public function carrera(): BelongsTo
    {
        return $this->belongsTo(Carrera::class, 'idCarrera');
    }
    public function materias(): HasMany
    {
        return $this->hasMany(Materia::class, 'idReticula');
    }
}
