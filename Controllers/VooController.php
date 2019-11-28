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
        $voo = new Voo();

        $voo->dataPartida = isset($request->dataPartida) ? $request->dataPartida : '';
        $voo->valorPassagem = isset($request->valorPassagem) ? $request->valorPassagem : '';
        $voo->aeronaveID = isset($request->aeronaveID) ? $request->aeronaveID : '';
        
        $voo->save();
        
        redirect('voos');
    }

    public function edit($request){
        $dao = new VooDAO();
        $dataPartida = isset($request->dataPartida) ? $request->dataPartida : '';
        $valorPassagem = isset($request->valorPassagem) ? $request->valorPassagem : '';
        $aeronaveID = isset($request->aeronaveID) ? $request->aeronaveID : '';
        $id = $request->params['id'];
        $voo = $dao->buscar($id);
        $voo->setDataPartida($dataPartida);
        $voo->setValorPassagem($valorPassagem).
        $voo->setAeronaveID($aeronaveID);
        $dao->editar($voo);

        redirect('voos');
    }

    public function delete($id){
        $voo = Voo::findOrFail($id);

        $voo.delete();
        
        redirect('voos');
    }
}
