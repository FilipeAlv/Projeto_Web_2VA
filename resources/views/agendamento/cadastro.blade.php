@extends('layouts.app')
@section('title', 'Cadastro de Agendamento')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>{{ isset($agendamento) ? 'Editar Agendamento' : 'Novo Agendamento' }}</h5>
		</div>
  		<div class="card-body mx-5">
			<form action="{{ isset($agendamento) ? route ('agendamento.atualizar', $agendamento->id ) : route ('agendamento.salvar' ) }}" method="post">
				@csrf
				<input type="hidden" name="status" value="agendado">
				<div class="form-row">	
				    <div class="form-group col-md-6">
				      	<label for="pet_id">Pet:</label>
				      	<select id="pet_id" name="pet_id" class="form-control"  >
					        <option selected disabled> Pet </option>
					        
					        @foreach($pets as $pet)
					        	@php 
					        		$dono = \App\ClienteModel::all()->where('id', $pet->id_dono)->first();
					        	@endphp

					        	<option value="{{ $pet->id }}"> {{ $pet->nome . " " . $dono->nome . " - " . $dono->cpf }} </option>

					        @endforeach
			      		</select>
			    	</div>
			    	<div class="form-group col-md-6">
				      	<label for="servico">Serviço:</label>
				      	<select id="servico" name="servico_id" class="form-control"  >
					        <option selected disabled> Serviço </option>
					        
					        @foreach($servicos as $servico)
					        	
					        	<option value="{{ $servico->id }}"> {{ $servico->nome . " -R$" . $servico->valor }} </option>

					        @endforeach
			      		</select>
			    	</div>
			  	</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-6">
					    <label for="dataAgendada">Data de Agendamento:</label>
					    <input type="date" class="form-control" id="dataAgendada" placeholder="Data de Agendamento" name="dataAgendada"  value="{{ isset( $agendamento->dataAgendada) ? $agendamento->dataAgendada : '' }}">
				  	</div>
				  	<div class="form-group col-md-6">
				      	<label for="horaAgendada">Hora de Agendamento:</label>
				      	<input type="time" class="form-control" id="horaAgendada" name="horaAgendada" placeholder="Hora de Agendamento"  value="{{ isset( $agendamento->horaAgendada) ? $agendamento->horaAgendada : '' }}" >
				    </div>
			  	</div>

			  	@if(isset($agendamento))

				  	<div class="form-row">
					  	<div class="form-group col-md-6">
						    <label for="dataInicio">Data de Inicio:</label>
						    <input type="date" class="form-control" id="dataInicio" placeholder="Data de Inicio" name="dataInicio"  value="{{ isset( $agendamento->dataInicio) ? $agendamento->dataInicio : '' }}">
					  	</div>
					  	<div class="form-group col-md-6">
					      	<label for="horaInicio">Hora de Inicio:</label>
					      	<input type="time" class="form-control" id="horaInicio" name="horaInicio" placeholder="Hora de Inicio"  value="{{ isset( $agendamento->horaInicio) ? $agendamento->horaInicio : '' }}" >
					    </div>
				  	</div>

				  	<div class="form-row">
					  	<div class="form-group col-md-6">
						    <label for="dataFim">Data de Termino:</label>
						    <input type="date" class="form-control" id="dataFim" placeholder="Data de Fim" name="dataFim"  value="{{ isset( $agendamento->dataFim) ? $agendamento->dataFim : '' }}">
					  	</div>
					  	<div class="form-group col-md-6">
					      	<label for="horaFim">Hora de Termino:</label>
					      	<input type="time" class="form-control" id="horaFim" name="horaFim" placeholder="Hora de Fim"  value="{{ isset( $agendamento->horaFim) ? $agendamento->horaFim : '' }}" >
					    </div>
				  	</div>

				  	<a href="{{ route('home') }}" class="btn btn-primary float-right m-2">Voltar</a>

				  	<a href="{{ route('agendamento.cancelar', $agendamento->id) }}" class="btn btn-danger float-right mt-2">Cancelar Agendamento</a>

				@else
					<button type="submit" class="btn btn-primary float-right mt-2"> Cadastrar</button>
				@endif

			  	
				

			</form>
		</div>
	</div>
</div>
@endsection