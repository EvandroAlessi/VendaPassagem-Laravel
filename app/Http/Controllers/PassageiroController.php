<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passageiro;

class PassageiroController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        return view("Passageiro/index", ["passageiros" => Passageiro::all()]);
    }

    public function create(Request $request){
        $passageiro = new Passageiro();

        $passageiro->CPF = isset($request->CPF) ? $request->CPF : '';
        $passageiro->RG = isset($request->RG) ? $request->RG : '';
        $passageiro->nome = isset($request->nome) ? $request->nome : '';
        $passageiro->dataNascimento = isset($request->dataNascimento) ? $request->dataNascimento : '';
      

        $passageiro->save();

        return redirect('passageiros');
    }

    public function edit(Request $request, $id){
        $passageiro = Passageiro::findOrFail($id);

        $passageiro->CPF = isset($request->CPF) ? $request->CPF : '';
        $passageiro->RG = isset($request->RG) ? $request->RG : '';
        $passageiro->nome = isset($request->nome) ? $request->nome : '';
        $passageiro->dataNascimento = isset($request->dataNascimento) ? $request->dataNascimento : '';
      

        $passageiro->save();

        return redirect('passageiros');
    }

    public function delete($id){
        $passageiro = Passageiro::FindOrFail($id);
        $passageiro->delete();

        return redirect('passageiros');
    }
}
