<?php $__env->startSection('title', 'Lista de Clientes'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Clientes</h5>
			<a class="btn btn-primary float-right" href="<?php echo e(route('cliente.cadastrar')); ?>"> Novo Cliente </a>
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
			  		<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<tr>
						    <th scope="row"><?php echo e($cliente->id); ?></th>
						    <td><?php echo e($cliente->nome); ?></td>
						    <td><?php echo e($cliente->sobrenome); ?></td>
						    <td><?php echo e($cliente->cidade); ?></td>				   
						    <td><?php echo e($cliente->estado); ?></td>
						    <td>
						    	<a href="<?php echo e(route('cliente.editar', $cliente->id)); ?>"><img width="25" src="<?php echo e(asset('images/editar.png')); ?>" /></a>

						    	<a href="<?php echo e(route('cliente.deletar', $cliente->id)); ?>"><img width="30" src="<?php echo e(asset('images/excluir.png')); ?>" /></a>
						    </td>
						</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aluno\Desktop\Projeto_Web_2VA\resources\views/cliente/listar.blade.php ENDPATH**/ ?>