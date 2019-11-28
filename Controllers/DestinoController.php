<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function index(){
        $destino = new Destino();

        return view("destinos", ["destinos" => $destino::all()]);
    }

    public function details(){
        
    }

    public function create(Request $request){
        $destino = new DestinoDAO();

        $destino->taxaEmbarque = isset($request->data['taxaEmbarque']) ? $request->data['taxaEmbarque']  : '';
        $destino->nomeAeroporto = isset($request->data['nomeAeroporto']) ? $request->data['nomeAeroporto']  : '';

        $destino::insert();

        $this->redirect('destinos');
    }

    public function edit(Request $request, $id){
        $dao = new DestinoDAO();
        $taxaEmbarque = isset($request->data['taxaEmbarque']) ? $request->data['taxaEmbarque']  : '';
        $nomeAeroporto = isset($request->data['nomeAeroporto']) ? $request->data['nomeAeroporto']  : '';
        $id = $request->params['id'];
        $destino = $dao->buscar($id);
        $destino->setTaxaEmbarque($taxaEmbarque);
        $destino->setNomeAeroporto($nomeAeroporto);
        $dao->editar($destino);
        $this->redirect('destinos');
    }

    public function delete($id){
        $dao = new DestinoDAO();
        $dao->excluir($request->params['id']);
        $this->redirect('destinos');
    }
}
