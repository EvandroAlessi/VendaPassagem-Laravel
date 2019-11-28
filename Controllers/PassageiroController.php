<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassageiroController extends Controller
{
    public function index(){
        $passageiro = new Passageiro();

        return view("passageiros", ["passageiros" => $passageiro::all()]);
    }

    public function details(){
        
    }
    
    public function create(Request $request){
        $passageiro = new Passageiro();

        $passageiro->CPF = isset($request->CPF) ? $request->CPF : '';
        $passageiro->RG = isset($request->RG) ? $request->RG : '';
        $passageiro->nome = isset($request->nome) ? $request->nome : '';
        $passageiro->dataNascimento = isset($request->dataNascimento) ? $request->dataNascimento : '';
        
        $passageiro->save();

        redirect('passageiros');
    }

    public function edit($request){
        $dao = new PassageiroDAO();
        $CPF = isset($request->CPF) ? $request->CPF : '';
        $RG = isset($request->RG) ? $request->RG: '';
        $nome = isset($request->nome) ? $request->nome : '';
        $dataNascimento = isset($request->dataNascimento) ? $request->dataNascimento : '';
        
        $passageiro = $dao->buscar($id);
        $passageiro->setCPF($CPF);
        $passageiro->setRG($RG);
        $passageiro->setNome($nome);
        $passageiro->setDataNascimento($dataNascimento);
        $dao->editar($passageiro);

        redirect('passageiros');
    }

    public function delete($id){
        $passageiro = Passageiro::findOrFail($id);

        $passageiro.delete();
        
        redirect('passageiros');
    }
}
