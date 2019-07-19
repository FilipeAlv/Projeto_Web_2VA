<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsuarioController extends Controller
{
    public function index(){
		$usuarios = User::all();
		return view('auth.listar', compact('usuarios'));
	}


    public function cadastrar(){
    	return view('auth.register');
    }

    public function salvar(Request $req){

    	$data = $req->all();
    	User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    	return redirect()->route('usuario.index');
    }

    public function deletar($id){
    	$usuario = User::findOrFail($id);
    	$usuario->delete();
    	return redirect()->route('usuario.index');
    }

    public function editar( $id){
    	$usuario = User::findOrFail($id);
    	return view('auth.register', compact('usuario'));
    }

    public function atualizar(Request $req , $id){
    	$dados = $req->all();
    	$usuario = User::findOrFail($id);
    	$usuario->update($dados);
    	return redirect()->route('usuario.editar' , $id);
    }
}

