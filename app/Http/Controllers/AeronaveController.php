<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AeronaveController extends Controller
{
    public function index(){
        $dados['aeronaves'] = Aeronave::all();
        $dados['destinos'] = Destino::all();

        return view("aeronaves", ["aeronaves" => $dados['aeronaves'], "destinos"=> $dados['destinos']]);
    }

    public function details(){
        
    }

    public function create(Request $request){
        $aeronave = new Aeronave();

        $aeronave->destinoID = isset($request->destinoID) ? $request->destinoID : '';
        $aeronave->modelo = isset($request->modelo) ? $request->modelo : '';
        $aeronave->qntAssentos = isset($request->qntAssentos) ? $request->qntAssentos : '';
        $aeronave->qntAssentosEspecial = isset($request->qntAssentosEspecial) ? $request->qntAssentosEspecial : '';

        $aeronave.save();

        redirect('aeronaves');
    }

    public function edit(Request $request, $id){

        $aeronave = Aeronave::findOrFail($id);

        $aeronave->destinoID = isset($request->destinoID) ? $request->destinoID : '';
        $aeronave->modelo = isset($request->modelo) ? $request->modelo : '';
        $aeronave->qntAssentos = isset($request->qntAssentos) ? $request->qntAssentos : '';
        $aeronave->qntAssentosEspecial = isset($request->qntAssentosEspecial) ? $request->qntAssentosEspecial : '';
        
        redirect('aeronaves');

    }

    public function delete($id){

        $aeronave = Aeronave::findOrFail($id);

        $aeronave.delete();
        
        redirect('aeronaves');
    }
}
