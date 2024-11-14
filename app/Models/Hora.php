<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;

    protected $fillable = [
        'hora_ini',
        'hora_fin',
    ];

    // Definir el campo 'id' como clave primaria autoincremental de tipo BIGINT
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
