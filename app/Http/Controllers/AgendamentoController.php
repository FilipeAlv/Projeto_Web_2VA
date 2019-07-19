<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AgendamentoModel;
use App\PetModel;
use App\ServicoModel;
class AgendamentoController extends Controller
{
    public function index(){
		$agendamentos = AgendamentoModel::all()->where('status','!=', 'finalizado');
		return view('agendamento.listar', compact('agendamentos'));
	}


    public function cadastrar(){
        $pets = PetModel::all();
        $servicos = ServicoModel::all();
        return view('agendamento.cadastro', compact('pets', 'servicos'));
    }

    public function salvar(Request $req){

    	$dados = $req->all();
    	$agendamento = new AgendamentoModel();
    	$agendamento->create($dados);
    	return redirect()->route('home');
    }

    public function deletar($id){
    	$agendamento = AgendamentoModel::findOrFail($id);
    	$agendamento->delete();
    	return redirect()->route('home');
    }

    public function editar( $id){
    	$agendamento = AgendamentoModel::findOrFail($id);
    	return view('agendamento.cadastro', compact('agendamento'));
    }

    public function atualizar(Request $req , $id){
    	$dados = $req->all();
    	$agendamento = AgendamentoModel::findOrFail($id);
    	$agendamento->update($dados);
    	return redirect()->route('agendamento.editar' , $id);
    }

    public function detalhe($id){
        $agendamento = AgendamentoModel::all()->where('id', $id)->first();
        $pets = PetModel::all();
        $servicos = ServicoModel::all();
        return view('agendamento.cadastro', compact('pets', 'servicos', 'agendamento'));
    }

     public function iniciar($id){
        $agendamento = AgendamentoModel::all()->where('id', $id)->first();
        $agendamento->status = 'inicado';
        $agendamento->dataInicio = date('Y-m-d');
        $agendamento->horaInicio = date('H:i:s');
        $agendamento->update();
        return redirect()->route('home');;
    }

     public function finalizar($id){
        $agendamento = AgendamentoModel::all()->where('id', $id)->first();
        $agendamento->status = 'finalizado';
        $agendamento->dataFim = date('Y-m-d');
        $agendamento->horaFim = date('H:i:s');
        $agendamento->update();
        return redirect()->route('home');;
    }

     public function cancelar($id){
        $agendamento = AgendamentoModel::all()->where('id', $id)->first();
        $agendamento->delete();
        return redirect()->route('home');
    }

}
