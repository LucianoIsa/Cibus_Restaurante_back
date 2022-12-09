<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barrio extends Model
{
    use SoftDeletes;

    protected $table = 'cibus_restaurante';

    protected $primarykey = 'id';

    protected $connection = 'mysql';

    protected $fillable  = [
        'nombre',
        'telefono',
        'mail'
    ];
}