<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personals extends Model
{
    use HasFactory;

    // Definimos los campos que se pueden llenar masivamente
    protected $fillable = [
        'RFC',
        'nombres',
        'apellidop',
        'apellidom',
        'licenciatura',
        'licit',
        'especializacion',
        'espit',
        'maestria',
        'maetit',
        'doctorado',
        'doctit',
        'fechasingsep',
        'fechaisingins',
        'depto_id',
        'puesto_id',
    ];

    // Campos de fecha
    protected $dates = ['fechaisingins', 'fechasingsep'];


    // Relación con Depto (Un Personals pertenece a un Depto)
    public function depto()
    {
        return $this->belongsTo(Depto::class, 'depto_id', 'idDepto');
    }

    // Relación con Puesto (Un Personals pertenece a un Puesto)
    public function puesto()
    {
        return $this->belongsTo(Puesto::class, 'puesto_id', 'id');
    }
}
