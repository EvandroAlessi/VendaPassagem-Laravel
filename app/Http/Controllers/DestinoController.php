<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destino;

class DestinoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        return view("destino.index", ["destinos" => Destino::all()]);
    }

    public function create(Request $request){
        $destino = new Destino();

        $destino->taxaEmbarque = isset($request->taxaEmbarque) ? $request->taxaEmbarque : '';
        $destino->nomeAeroporto = isset($request->nomeAeroporto) ? $request->nomeAeroporto : '';

        $destino->save();

        return redirect('destinos');
    }

    public function edit(Request $request, $id){
        $destino = Destino::findOrFail($id);
        $destino->taxaEmbarque = isset($request->taxaEmbarque) ? $request->taxaEmbarque : '';
        $destino->nomeAeroporto = isset($request->nomeAeroporto) ? $request->nomeAeroporto : '';
        
        $destino->save();
        
        return redirect('destinos');
    }

    public function delete($id){
        $destino = Destino::findOrFail($id);
        $destino->delete($id);
        
        return redirect('destinos');
    }
}
