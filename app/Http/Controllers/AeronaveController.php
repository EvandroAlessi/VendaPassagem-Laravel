<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AeronaveController extends Controller
{
    public function indexAction(){
        $dao = new AeronaveDAO();
        $dados['aeronaves'] = $dao->buscarTodos();
        
        $dao = new DestinoDAO();
        $dados['destinos'] = $dao->buscarTodos();

        return view("aeronaves", ["aeronaves" => $dados['aeronaves'], "destinos"=> $dados['destinos']]);
    }

    public function detailsAction(){
        
    }

    public function createAction($request){
        $dao = new AeronaveDAO();

        $destinoID = isset($request->data['destinoID']) ? $request->data['destinoID']  : '';
        $modelo = isset($request->data['modelo']) ? $request->data['modelo']  : '';
        $qntAssentos = isset($request->data['qntAssentos']) ? $request->data['qntAssentos']  : '';
        $qntAssentosEspecial = isset($request->data['qntAssentosEspecial']) ? $request->data['qntAssentosEspecial']  : '';

        $dao->inserir(new Aeronave(
            $destinoID,
            $modelo,
            $qntAssentos,
            $qntAssentosEspecial
        ));

        $this->redirect('aeronaves');
    }

    public function editAction($request){

        $dao = new AeronaveDAO();

        $destinoID = isset($request->data['destinoID']) ? $request->data['destinoID']  : '';
        $modelo = isset($request->data['modelo']) ? $request->data['modelo']  : '';
        $qntAssentos = isset($request->data['qntAssentos']) ? $request->data['qntAssentos']  : '';
        $qntAssentosEspecial = isset($request->data['qntAssentosEspecial']) ? $request->data['qntAssentosEspecial']  : '';
        $id = $request->params['id'];

        $aeronave = $dao->buscar($id);
        $aeronave->setDestinoID($destinoID);
        $aeronave->setModelo($modelo);
        $aeronave->setQntAssentos($qntAssentos);
        $aeronave->setQntAssentosEspecial($qntAssentosEspecial);

        $dao->editar($aeronave);

        

        $this->redirect('aeronaves');

    }

    public function deleteAction($request){

        $dao = new AeronaveDAO();

        $dao->excluir($request->params['id']);

        $this->redirect('aeronaves');

    }
}
