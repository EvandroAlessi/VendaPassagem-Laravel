<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    function login($request)
    {
        $dao = new UsuarioDAO();

        $username = isset($request->data['username']) ? $request->data['username']  : '';
        $password = isset($request->data['password']) ? $request->data['password'] : '';

        $nome = $dao->buscar($username, $password);
        
        if ($nome)
        {
            $_SESSION["logado"] = true;

            $_SESSION["nome"] = $nome;

            return view("index");
        }
        else
        {
            $_SESSION["logado"] = false;
            $_SESSION["nome"] = "";
            return view("/Account/Login");
        }
    }

    function logout($request)
    {
        $_SESSION["logado"] = false;
        $this->result("Account", "Login");
    }

    function save($request){
        $dao = new UsuarioDAO();

        $name = isset($request->data['name']) ? $request->data['name']  : '';
        $username = isset($request->data['username']) ? $request->data['username']  : '';
        $password = isset($request->data['password']) ? $request->data['password'] : '';

        $dao->inserir(new Usuario(
            $name,
            $username,
            $password 
        ));

        $_SESSION["logado"] = true;

        $this->redirect("");
    }

    function register($request){
        $this->result("Account", "register");
    }

    function forgotPassword($request){
        $this->result("Account", "forgotPassword");
    }
}
