<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PetModel;
use App\ClienteModel;

class PetController extends Controller
{
    public function index(){
		$pets = PetModel::all();
		return view('pet.listar', compact('pets'));
	}


    public function cadastrar(){
        $clientes = ClienteModel::all();
    	return view('pet.cadastro', compact('clientes'));
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	$pet = new PetModel();
    	$pet->create($dados);
    	return redirect()->route('pet.index');
    }

    public function deletar($id){
    	$pet = PetModel::findOrFail($id);
    	$pet->delete();
    	return redirect()->route('pet.index');
    }

    public function editar( $id){
    	$pet = PetModel::findOrFail($id);
        $clientes = ClienteModel::all();
    	return view('pet.cadastro', compact('pet', 'clientes'));
    }

    public function atualizar(Request $req , $id){
    	$dados = $req->all();
    	$pet = PetModel::findOrFail($id);
    	$pet->update($dados);
    	return redirect()->route('pet.editar' , $id);
    }

}
