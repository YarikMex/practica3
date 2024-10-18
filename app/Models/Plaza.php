<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaza extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombrePlaza',  // Campos que pueden ser llenados masivamente
    ];

    // Definir el campo 'idPlaza' como clave primaria si es necesario
    protected $primaryKey = 'idPlaza';
    public $incrementing = true;
    protected $keyType = 'int';
}