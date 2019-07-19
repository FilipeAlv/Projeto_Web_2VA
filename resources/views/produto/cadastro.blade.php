@extends('layouts.app')
@section('title', 'Cadastro de Produto')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>{{ isset($produto) ? 'Editar Produto' : 'Novo Produto' }}</h5>
		</div>
  		<div class="card-body mx-5">
			<form action="{{ isset($produto) ? route ('produto.atualizar', $produto->id ) : route ('produto.salvar' ) }}" method="post">
				@csrf
				<div class="form-row">
				    <div class="form-group col-md-3">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="{{ isset( $produto->nome) ? $produto->nome : '' }}" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="marca">Marca:</label>
				      	<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca"  value="{{ isset( $produto->marca) ? $produto->marca : '' }}" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="categoria">Categoria:</label>
				      	<input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria"  value="{{ isset( $produto->categoria) ? $produto->categoria : '' }}" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="valor">Valor:</label>
				      	<input type="number" class="form-control" id="valor" name="valor" placeholder="Valor"  value="{{ isset( $produto->valor) ? $produto->valor : '' }}" >
				    </div>
				</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-5">
					    <label for="dataValidade">Data de Validade:</label>
					    <input type="date" class="form-control" id="dataValidade" placeholder="Data de Validade" name="dataValidade"  value="{{ isset( $produto->dataValidade) ? $produto->dataValidade : '' }}">
				  	</div>
				  	<div class="form-group col-md-5">
					    <label for="dataFabricacao">Data de Fabricação:</label>
					    <input type="date" class="form-control" id="dataFabricacao" placeholder="Data de Fabricação" name="dataFabricacao"  value="{{ isset( $produto->dataFabricacao) ? $produto->dataFabricacao : '' }}">
				  	</div>

					<div class="form-group col-md-2">
					    <label for="quantidade">Quantidade:</label>
					    <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade"  value="{{ isset( $produto->quantidade) ? $produto->quantidade : '' }}">
				  	</div>

			  	</div>

	

				<button type="submit" class="btn btn-primary float-right mt-2">
				{{ isset($produto) ? 'Salvar Alterações' : 'Cadastrar' }}</button>

			</form>
		</div>
	</div>
</div>
@endsection