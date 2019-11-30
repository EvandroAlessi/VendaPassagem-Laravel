<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voo;
use App\Aeronave;

class VooController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index(){
        return view("Voo/index", ["voos" => Voo::all(), "aeronaves"=> Aeronave::all() ]);
    }

    public function details(){
        
    }

    public function create(Request $request){
        $voo = new Voo();

        $voo->dataPartida = isset($request->dataPartida) ? $request->dataPartida : '';
        $voo->valorPassagem = isset($request->valorPassagem) ? $request->valorPassagem : '';
        $voo->aeronaveID = isset($request->aeronaveID) ? $request->aeronaveID : '';
        
        $voo->save();
        
        return redirect('voos');
    }

    public function edit(Request $request, $id){
        $voo = Voo::findOrFail($id);

        $voo->dataPartida = isset($request->dataPartida) ? $request->dataPartida : '';
        $voo->valorPassagem = isset($request->valorPassagem) ? $request->valorPassagem : '';
        $voo->aeronaveID = isset($request->aeronaveID) ? $request->aeronaveID : '';
        
        $voo->save();

        return redirect('voos');
    }

    public function delete($id){
        $voo = Voo::FindOrFail($id);
        $voo->delete();

        return redirect('voos');
    }
}
