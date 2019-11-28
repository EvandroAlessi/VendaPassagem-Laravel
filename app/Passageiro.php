<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    private $ID;
    private $CPF;
    private $RG;
    private $nome;
    private $dataNascimento;

    public function __construct($CPF, $RG, $nome, $dataNascimento) {
        $this->CPF = $CPF;
        $this->RG = $RG;
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
    }

    public function getID(){
        return $this->ID;
    }

    public function getCPF(){
        return $this->CPF;
    }

    public function getRG(){
        return $this->RG;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setID($id){
        $this->ID = $id;
    }

    public function setCPF($CPF){
        $this->CPF = $CPF;
    }

    public function setRG($RG){
        $this->RG = $RG;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
}
