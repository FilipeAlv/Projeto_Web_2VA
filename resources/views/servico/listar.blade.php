@extends('layouts.app')
@section('title', 'Lista de Serviços')
@section('content')
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Serviços</h5>
			<a class="btn btn-primary float-right" href="{{ route('servico.cadastrar') }}"> Novo Serviço</a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Valor</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		@foreach($servicos as $servico)
				    	<tr>
						    <th scope="row">{{ $servico->id }}</th>
						    <td>{{ $servico->nome }}</td>
						    <td>R$ {{ $servico->valor }}</td>
						    <td>
						    	<a href="{{ route('servico.editar', $servico->id) }}"><img width="25" src="{{ asset('images/editar.png') }}" /></a>

						    	<a href="{{ route('servico.deletar', $servico->id) }}"><img width="30" src="{{ asset('images/excluir.png') }}" /></a>
						    </td>
						</tr>
				    @endforeach
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection