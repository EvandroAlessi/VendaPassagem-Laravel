<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    protected $table = 'Passageiro';

    protected $fillable = [
        'CPF',
        'RG',
        'RG',
        'nome',
        'dataNascimento',
    ];
    
}
