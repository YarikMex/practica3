<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
