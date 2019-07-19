@extends('layouts.app')
@section('title', 'Cadastro de Serviço')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>{{ isset($servico) ? 'Editar Serviço' : 'Novo Serviço' }}</h5>
		</div>
  		<div class="card-body mx-5">
			<form action="{{ isset($servico) ? route ('servico.atualizar', $servico->id ) : route ('servico.salvar' ) }}" method="post">
				@csrf
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ isset( $servico->nome) ? $servico->nome : '' }}" >
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="valor">Valor:</label>
				      	<input type="text" class="form-control" id="valor" name="valor" placeholder="Valor"  value="{{ isset( $servico->valor) ? $servico->valor : '' }}" >
				    </div>
				    
				</div>	

				<button type="submit" class="btn btn-primary float-right mt-2">
				{{ isset($servico) ? 'Salvar Alterações' : 'Cadastrar' }}</button>

			</form>
		</div>
	</div>
</div>
@endsection