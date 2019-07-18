@extends('layout.app')
@section('title', 'Lista de Clientes')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Clientes</h5>
			<a class="btn btn-primary float-right" href="{{ route('cliente.cadastrar') }}"> Novo Cliente </a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Sobrenome</th>
				      	<th scope="col">Cidade</th>
				      	<th scope="col">Estado</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		@foreach($clientes as $cliente)
				    	<tr>
						    <th scope="row">{{ $cliente->id }}</th>
						    <td>{{ $cliente->nome }}</td>
						    <td>{{ $cliente->sobrenome }}</td>
						    <td>{{ $cliente->cidade }}</td>				   
						    <td>{{ $cliente->estado }}</td>
						    <td>
						    	<a href="{{ route('cliente.editar', $cliente->id) }}"><img width="25" src="{{ asset('images/editar.png') }}" /></a>

						    	<a href="{{ route('cliente.deletar', $cliente->id) }}"><img width="30" src="{{ asset('images/excluir.png') }}" /></a>
						    </td>
						</tr>
				    @endforeach
			  </tbody>
			</table>
	</div>
</div>
@endsection