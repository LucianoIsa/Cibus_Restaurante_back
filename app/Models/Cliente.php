<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use SoftDeletes;
    protected $table = 'clientes';
    protected $primarykey = 'id';

    protected $connection = 'mysql';
    protected $fillable  = [     //Solo van los datos que no son la clave primaria
        'nombre_completo',
        'telefono',
        'email',
        'fecha_reserva'
    ];
}