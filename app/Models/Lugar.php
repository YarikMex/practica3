<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    protected $table = 'lugares';

    protected $fillable = [
        'nombrelugar',
        'nombrecorto',
        'edificio_id',
    ];

    // Definir el campo 'id' como clave primaria autoincremental de tipo BIGINT
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    /**
     * Relaciones
     */
    public function edificio()
    {
        return $this->belongsTo(Edificio::class, 'edificio_id', 'id');
    }
}
