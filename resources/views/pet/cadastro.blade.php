@extends('layout.app')
@section('title', 'Cadastro de Pet')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>{{ isset($pet) ? 'Editar Pet' : 'Novo Pet' }}</h5>
		</div>
  		<div class="card-body mx-5">
			<form action="{{ isset($pet) ? route ('pet.atualizar', $pet->id ) : route ('pet.salvar' ) }}" method="post">
				@csrf
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ isset( $pet->nome) ? $pet->nome : '' }} " >
				    </div>
				    <div class="form-group col-md-6">
				    	<label for="dataNescimento">Data Nascimento:</label>
					      <input type="date" class="form-control" id="dataNescimento" placeholder="Data de Nascimento" name="dataNascimento"  value="{{ isset( $pet->dataNascimento ) ? $pet->dataNascimento : '' }}">
				    </div>
				</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-6">
					    <label for="especie">Espécie:</label>
					    <input type="text" class="form-control" id="especie" placeholder="Espécie" name="especie"  value="{{ isset( $pet->especie) ? $pet->especie : '' }} ">
				  	</div>
				  	<div class="form-group col-md-6">
				      	<label for="raca">Raça:</label>
				      	<input type="text" class="form-control" id="raca" name="raca" placeholder="Raça"  value="{{ isset( $pet->raca) ? $pet->raca : '' }} " >
				    </div>
			  	</div>

			  	<div class="form-row">
				    		
				    <div class="form-group col-md-12">
				      	<label for="id_dono">Dono:</label>
				      	<select id="id_dono" name="id_dono" class="form-control"  >
					        <option selected disabled> Dono </option>
					        
					        @foreach($clientes as $cliente)
					        	<option value="{{ $cliente->id }}"> {{ $cliente->nome . " " . $cliente->sobrenome . " - " . $cliente->cpf }} </option>
					        @endforeach
			      		</select>
			    	</div>
			  	</div>

				<button type="submit" class="btn btn-primary float-right mt-2">
				{{ isset($pet) ? 'Salvar Alterações' : 'Cadastrar' }}</button>

			</form>
		</div>
	</div>
</div>
@endsection