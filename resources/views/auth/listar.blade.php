@extends('layouts.app')
@section('title', 'Lista de Usuários')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de U´suários</h5>
			<a class="btn btn-primary float-right" href="{{ route('pet.cadastrar') }}"> Novo Usuário</a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		@foreach($usuarios as $usuario)
		
				    	<tr>
						    <th scope="row">{{ $usuario->id }}</th>
						    <td>{{ $usuario->name }}</td>						    
						    <td>
						    	<a href="{{ route('usuario.editar', $usuario->id) }}"><img width="25" src="{{ asset('images/editar.png') }}" /></a>

						    	<a href="{{ route('usuario.deletar', $usuario->id) }}"><img width="30" src="{{ asset('images/excluir.png') }}" /></a>
						    </td>
						</tr>
				    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection