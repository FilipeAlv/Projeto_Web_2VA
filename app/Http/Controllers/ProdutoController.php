<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProdutoModel;
class ProdutoController extends Controller
{
    public function index(){
		$produtos = ProdutoModel::all();
		return view('produto.listar', compact('produtos'));
	}


    public function cadastrar(){
    	return view('produto.cadastro');
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	$produto = new ProdutoModel();
    	$produto->create($dados);
    	return redirect()->route('produto.index');
    }

    public function deletar($id){
    	$produto = ProdutoModel::findOrFail($id);
    	$produto->delete();
    	return redirect()->route('produto.index');
    }

    public function editar( $id){
    	$produto = ProdutoModel::findOrFail($id);
    	return view('produto.cadastro', compact('produto'));
    }

    public function atualizar(Request $req , $id){
    	$dados = $req->all();
    	$produto = ProdutoModel::findOrFail($id);
    	$produto->update($dados);
    	return redirect()->route('produto.editar' , $id);
    }
}
