@extends('layouts.app')
@section('title', 'Cadastro de Cliente')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>{{ isset($cliente) ? 'Editar Cliente' : 'Novo Cliente' }}</h5>
		</div>
  		<div class="card-body mx-5">
			<form action="{{ isset($cliente) ? route ('cliente.atualizar', $cliente->id ) : route ('cliente.salvar' ) }}" method="post">
				@csrf
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ isset( $cliente->nome) ? $cliente->nome : '' }} " >
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="sobrenome">Sobrenome:</label>
				      	<input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Sobrenome"  value="{{ isset( $cliente->sobrenome) ? $cliente->sobrenome : '' }} " >
				    </div>
				</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-5">
					    <label for="cpf">CPF:</label>
					    <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf"  value="{{ isset( $cliente->cpf) ? $cliente->cpf : '' }} ">
				  	</div>
				  	<div class="form-group col-md-5">
					    <label for="rg">RG:</label>
					    <input type="text" class="form-control" id="rg" placeholder="RG" name="rg"  value="{{ isset( $cliente->rg) ? $cliente->rg : '' }} ">
				  	</div>
				  	<div class="form-group col-md-2">
					      <label for="dataNescimento">Data Nascimento:</label>
					      <input type="date" class="form-control" id="dataNescimento" placeholder="Data de Nascimento" name="dataNascimento"  value="{{ isset( $cliente->dataNascimento ) ? $cliente->dataNascimento : '' }}">
				  	</div>
			  	</div>

			  	<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="endereco">Endereço:</label>
				      <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco"  value="{{ isset( $cliente->endereco) ? $cliente->endereco : '' }} ">
				    </div>	
				    <div class="form-group col-md-4">
				      <label for="cidade">Cidade:</label>
				      <input type="text" class="form-control" id="cidade" placeholder="Cidade" name = "cidade"  value="{{ isset( $cliente->cidade) ? $cliente->cidade : '' }}" >
				    </div>			
				    <div class="form-group col-md-2">
				      	<label for="estado">Estado:</label>
				      	<select id="estado" name="estado" class="form-control"  >
					        <option selected disabled> Estado </option>
					        <option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espírito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MT">Mato Grosso</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
			      		</select>
			    	</div>
			  	</div>

				<button type="submit" class="btn btn-primary float-right mt-2">
				{{ isset($cliente) ? 'Salvar Alterações' : 'Cadastrar' }}</button>

			</form>
		</div>
	</div>
</div>
@endsection