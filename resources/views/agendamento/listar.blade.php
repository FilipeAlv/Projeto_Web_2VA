@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="content">
    <div class="card m-5">
        <div class="card-header">
            <h5>Agenda</h5>
            <a class="btn btn-primary float-right" href="{{ route('agendamento.cadastrar') }}"> Novo Agendamento</a>
        </div>

        @foreach($agendamentos as $agendamento)
            @php
                $pet = \App\PetModel::all()->where('id', $agendamento->pet_id)->first();
                $dono = \App\ClienteModel::all()->where('id', $pet->id_dono)->first();
                $servico = \App\ServicoModel::all()->where('id', $agendamento->servico_id)->first();
            @endphp 

            <div class="card-body mx-2">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-center" > {{ $pet->nome." - ".$dono->nome." (".$dono->cpf .")"}} </h5>
                    <p class="card-text ">Serviço: {{ $servico->nome." - R$".$servico->valor }}</p>
                    <p class="card-text ">Data: {{ $agendamento->dataAgendada }} </p>
                    <p class="card-text "> Hora: {{ $agendamento->horaAgendada }}</p>
                   
                    @if($agendamento->status == "agendado")
                        <a href="{{ route('agendamento.iniciar' , $agendamento->id) }}" class="btn btn-success mx-3 float-right" >Iniciar</a>
                    @else
                           <a href="{{ route('agendamento.finalizar' , $agendamento->id) }}" class="btn btn-danger mx-3 float-right" >Finalizar</a>
                    @endif

                     <a href="{{ route('agendamento.detalhe' , $agendamento->id) }}" class="btn btn-primary float-right" >Detalhes </a>
                    
                  </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection