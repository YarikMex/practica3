<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalPlaza extends Model
{
    use HasFactory;

    protected $fillable = [
        'tiponombramiento',
        'plaza_id',
        'personal_id',
    ];

    // Definir el campo 'id' como clave primaria autoincremental
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

    /**
     * Relaciones
     */
    public function plaza()
    {
        return $this->belongsTo(Plaza::class, 'plaza_id', 'idPlaza');
    }

    public function personals()
    {
        return $this->belongsTo(Personals::class, 'personal_id', 'id');
    }
}
