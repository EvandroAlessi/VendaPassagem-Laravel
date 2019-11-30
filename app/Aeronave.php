<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    protected $table = 'Aeronave';

    protected $fillable = [
        'destinoID',
        'modelo',
        'qntAssentos',
        'qntAssentosEspecial',
    ];
}
