<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VooController extends Controller
{
    public function index(){
        $voo = new Voo();
        $aeronave = new Aeronave();

        return view("voos", ["voos" => $voo::all(), "aeronaves"=> $aeronave::all() ]);
    }

    public function details(){
        
    }

    public function create($request){
        $dao = new VooDAO();
        $dataPartida = isset($request->data['dataPartida']) ? $request->data['dataPartida']  : '';
        $valorPassagem = isset($request->data['valorPassagem']) ? $request->data['valorPassagem']  : '';
        $aeronaveID = isset($request->data['aeronaveID']) ? $request->data['aeronaveID']  : '';
        $dao->inserir(new Voo(
            $aeronaveID,
            $dataPartida,
            $valorPassagem
        ));
        
        redirect('voos');
    }

    public function edit($request){
        $dao = new VooDAO();
        $dataPartida = isset($request->data['dataPartida']) ? $request->data['dataPartida']  : '';
        $valorPassagem = isset($request->data['valorPassagem']) ? $request->data['valorPassagem']  : '';
        $aeronaveID = isset($request->data['aeronaveID']) ? $request->data['aeronaveID']  : '';
        $id = $request->params['id'];
        $voo = $dao->buscar($id);
        $voo->setDataPartida($dataPartida);
        $voo->setValorPassagem($valorPassagem).
        $voo->setAeronaveID($aeronaveID);
        $dao->editar($voo);

        redirect('voos');
    }

    public function delete($request){
        $dao = new VooDAO();
        $dao->excluir($request->params['id']);
        
        redirect('voos');
    }
}
