<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    protected $table = 'Voo';

    protected $fillable = [
        'aeronaveID',
        'dataPartida',
        'valorPassagem'
    ];
}
