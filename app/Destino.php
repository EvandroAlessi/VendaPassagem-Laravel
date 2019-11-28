<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    private $ID;
    private $nomeAeroporto;
    private $taxaEmbarque;

    public function __construct($nomeAeroporto, $taxaEmbarque) {
        $this->nomeAeroporto = $nomeAeroporto;
        $this->taxaEmbarque = $taxaEmbarque;
    }

    public function getID(){
        return $this->ID;
    }

    public function getNomeAeroporto(){
        return $this->nomeAeroporto;
    }

    public function getTaxaEmbarque(){
        return $this->taxaEmbarque;
    }

    public function setID($id){
        $this->ID = $id;
    }

    public function setNomeAeroporto($nomeAeroporto){
        $this->nomeAeroporto = $nomeAeroporto;
    }

    public function setTaxaEmbarque($taxaEmbarque){
        $this->taxaEmbarque = $taxaEmbarque;
    }
}
