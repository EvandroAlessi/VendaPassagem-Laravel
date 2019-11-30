<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    protected $table = 'Destino';

    protected $fillable = [
        'nomeAeroporto',
        'taxaEmbarque'
     ];
}
