<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreedificio',
        'nombrecorto',
    ];

    // Definir el campo 'id' como clave primaria autoincremental de tipo BIGINT
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
