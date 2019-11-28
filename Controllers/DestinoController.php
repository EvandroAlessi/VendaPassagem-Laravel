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
        $destino = new Destino();

        $destino->taxaEmbarque = isset($request->taxaEmbarque) ? $request->taxaEmbarque : '';
        $destino->nomeAeroporto = isset($request->nomeAeroporto) ? $request->nomeAeroporto : '';

        $destino::save();

        redirect('destinos');
    }

    public function edit(Request $request, $id){
        $destino = Destino::findOrFail($id);
        
        $destino->taxaEmbarque = isset($request->taxaEmbarque) ? $request->taxaEmbarque : '';
        $destino->nomeAeroporto = isset($request->nomeAeroporto) ? $request->nomeAeroporto : '';
        $id = $request->params['id'];

        $destino->save($destino);


        redirect('destinos');
    }

    public function delete($id){
        $destino = Destino::findOrFail($id);

        $destino.delete();
        
        redirect('destinos');
    }
}
