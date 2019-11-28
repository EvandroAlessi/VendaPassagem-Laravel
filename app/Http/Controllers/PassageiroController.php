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
        $dao = new PassageiroDAO();
        $CPF = isset($request->data['CPF']) ? $request->data['CPF']  : '';
        $RG = isset($request->data['RG']) ? $request->data['RG']  : '';
        $nome = isset($request->data['nome']) ? $request->data['nome']  : '';
        $dataNascimento = isset($request->data['dataNascimento']) ? $request->data['dataNascimento']  : '';
        $dao->inserir(new Passageiro(
            $CPF,
            $RG,
            $nome,
            $dataNascimento
        ));

        $this->redirect('passageiros');
    }

    public function edit($request){
        $dao = new PassageiroDAO();
        $CPF = isset($request->data['CPF']) ? $request->data['CPF']  : '';
        $RG = isset($request->data['RG']) ? $request->data['RG']  : '';
        $nome = isset($request->data['nome']) ? $request->data['nome']  : '';
        $dataNascimento = isset($request->data['dataNascimento']) ? $request->data['dataNascimento']  : '';
        $id = $request->params['id'];
        $passageiro = $dao->buscar($id);
        $passageiro->setCPF($CPF);
        $passageiro->setRG($RG);
        $passageiro->setNome($nome);
        $passageiro->setDataNascimento($dataNascimento);
        $dao->editar($passageiro);

        $this->redirect('passageiros');
    }

    public function delete($request){
        $dao = new PassageiroDAO();
        $dao->excluir($request->params['id']);

        $this->redirect('passageiros');
    }
}
