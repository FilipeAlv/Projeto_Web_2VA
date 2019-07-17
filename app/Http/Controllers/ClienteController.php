<?php

namespace App\Http\Controllers;

use App\ClienteModel;
use Illuminate\Http\Request;

class ClienteController extends Controller{

	public function index(){
		$clientes = ClienteModel::all();
		return view('cliente.listar', compact('clientes'));
	}


    public function cadastrar(){
    	return view('cliente.cadastro');
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	$cliente = new ClienteModel();
    	$cliente->create($dados);
    	return redirect()->route('cliente.index');
    }

    public function deletar($id){
    	$cliente = ClienteModel::findOrFail($id);
    	$cliente->delete();
    	return redirect()->route('cliente.index');
    }
}
