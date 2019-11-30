<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aeronave;
use App\Destino;

class AeronaveController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $dados['aeronaves'] = Aeronave::all();
        $dados['destinos'] = array();

        foreach (Destino::all() as $key => $value) {
            $dados['destinos'][$value->id] = $value;
        }

        return view("Aeronave/index", ["aeronaves" => $dados['aeronaves'], "destinos"=> $dados['destinos']]);
    }

    public function create(Request $request){
        $aeronave = new Aeronave();

        $aeronave->destinoID = isset($request->destinoID) ? $request->destinoID : '';
        $aeronave->modelo = isset($request->modelo) ? $request->modelo : '';
        $aeronave->qntAssentos = isset($request->qntAssentos) ? $request->qntAssentos : '';
        $aeronave->qntAssentosEspecial = isset($request->qntAssentosEspecial) ? $request->qntAssentosEspecial : '';

        $aeronave.save();

        return redirect('aeronaves');
    }

    public function edit(Request $request, $id){

        $aeronave = Aeronave::findOrFail($id);

        $aeronave->destinoID = isset($request->destinoID) ? $request->destinoID : '';
        $aeronave->modelo = isset($request->modelo) ? $request->modelo : '';
        $aeronave->qntAssentos = isset($request->qntAssentos) ? $request->qntAssentos : '';
        $aeronave->qntAssentosEspecial = isset($request->qntAssentosEspecial) ? $request->qntAssentosEspecial : '';
        
        return redirect('aeronaves');

    }

    public function delete($id){

        $aeronave = Aeronave::findOrFail($id);

        $aeronave.delete();
        
        return redirect('aeronaves');
    }
}
