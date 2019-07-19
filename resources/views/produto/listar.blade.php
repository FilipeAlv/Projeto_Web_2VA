@extends('layouts.app')
@section('title', 'Lista de Produtos')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Produtos</h5>
			<a class="btn btn-primary float-right" href="{{ route('produto.cadastrar') }}"> Novo Produto</a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Marca</th>
				      	<th scope="col">Quantidade</th>
				      	<th scope="col">Valor</th>
				      	<th scope="col">Data de Validade</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		@foreach($produtos as $produto)
				    	<tr>
						    <th scope="row">{{ $produto->id }}</th>
						    <td>{{ $produto->nome }}</td>
						    <td>{{ $produto->marca }}</td>
						    <td>{{ $produto->quantidade }}</td>				   
						    <td>R$ {{ $produto->valor }} </td>
						    <td> {{ $produto->dataValidade }} </td>
						    <td>
						    	<a href="{{ route('produto.editar', $produto->id) }}"><img width="25" src="{{ asset('images/editar.png') }}" /></a>

						    	<a href="{{ route('produto.deletar', $produto->id) }}"><img width="30" src="{{ asset('images/excluir.png') }}" /></a>
						    </td>
						</tr>
				    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection