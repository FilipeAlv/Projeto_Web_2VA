<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicoModel;

class ServicoController extends Controller
{
      public function index(){
		$servicos = ServicoModel::all();
		return view('servico.listar', compact('servicos'));
	}


    public function cadastrar(){
    	return view('servico.cadastro');
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	$servico = new ServicoModel();
    	$servico->create($dados);
    	return redirect()->route('servico.index');
    }

    public function deletar($id){
    	$servico = ServicoModel::findOrFail($id);
    	$servico->delete();
    	return redirect()->route('servico.index');
    }

    public function editar( $id){
    	$servico = ServicoModel::findOrFail($id);
    	return view('servico.cadastro', compact('servico'));
    }

    public function atualizar(Request $req , $id){
    	$dados = $req->all();
    	$servico = ServicoModel::findOrFail($id);
    	$servico->update($dados);
    	return redirect()->route('servico.editar' , $id);
    }}
