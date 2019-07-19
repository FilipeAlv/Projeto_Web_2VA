<?php $__env->startSection('title', 'Lista de Serviços'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Serviços</h5>
			<a class="btn btn-primary float-right" href="<?php echo e(route('servico.cadastrar')); ?>"> Novo Serviço</a>
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
			  		<?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<tr>
						    <th scope="row"><?php echo e($servico->id); ?></th>
						    <td><?php echo e($servico->nome); ?></td>
						    <td>R$ <?php echo e($servico->valor); ?></td>
						    <td>
						    	<a href="<?php echo e(route('servico.editar', $servico->id)); ?>"><img width="25" src="<?php echo e(asset('images/editar.png')); ?>" /></a>

						    	<a href="<?php echo e(route('servico.deletar', $servico->id)); ?>"><img width="30" src="<?php echo e(asset('images/excluir.png')); ?>" /></a>
						    </td>
						</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/servico/listar.blade.php ENDPATH**/ ?>