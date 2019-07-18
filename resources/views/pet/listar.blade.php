@extends('layout.app')
@section('title', 'Lista de Pets')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Pets</h5>
			<a class="btn btn-primary float-right" href="{{ route('pet.cadastrar') }}"> Novo Pet</a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Espécie</th>
				      	<th scope="col">Raça</th>
				      	<th scope="col">Código do Dono</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		@foreach($pets as $pet)
				    	<tr>
						    <th scope="row">{{ $pet->id }}</th>
						    <td>{{ $pet->nome }}</td>
						    <td>{{ $pet->especie }}</td>
						    <td>{{ $pet->raca }}</td>				   
						    <td><a class="mx-5" href="{{ route('cliente.editar', $pet->id_dono) }}">{{ $pet->id_dono }} </a></td>
						    <td>
						    	<a href="{{ route('pet.editar', $pet->id) }}"><img width="25" src="{{ asset('images/editar.png') }}" /></a>

						    	<a href="{{ route('pet.deletar', $pet->id) }}"><img width="30" src="{{ asset('images/excluir.png') }}" /></a>
						    </td>
						</tr>
				    @endforeach
			  </tbody>
			</table>
	</div>
</div>
@endsection