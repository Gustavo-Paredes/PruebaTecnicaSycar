<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Edad',
        'Genero',
        'Email',
        'Pais',
        'Ciudad',
        'Foto',
    ];
}
