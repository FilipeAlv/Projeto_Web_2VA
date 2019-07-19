<?php $__env->startSection('title', 'Lista de Pets'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Pets</h5>
			<a class="btn btn-primary float-right" href="<?php echo e(route('pet.cadastrar')); ?>"> Novo Pet</a>
		</div>
  		<div class="card-body mx-5">
			<table class="table">
				<thead class="thead-dark">
				    <tr>
				      	<th scope="col">Código</th>
				      	<th scope="col">Nome</th>
				      	<th scope="col">Espécie</th>
				      	<th scope="col">Raça</th>
				      	<th scope="col">Dono</th>
				      	<th scope="col">Ações</th>
				    </tr>
				</thead>
			  	<tbody>
			  		<?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			  			<?php 
			  				$dono = \App\ClienteModel::all()->where('id', $pet->id_dono)->first(); 
			  			?>
				    	<tr>
						    <th scope="row"><?php echo e($pet->id); ?></th>
						    <td><?php echo e($pet->nome); ?></td>
						    <td><?php echo e($pet->especie); ?></td>
						    <td><?php echo e($pet->raca); ?></td>				   
						    <td><a class="mx-5" href="<?php echo e(route('cliente.editar', $pet->id_dono)); ?>"><?php echo e($dono->nome); ?> </a></td>
						    <td>
						    	<a href="<?php echo e(route('pet.editar', $pet->id)); ?>"><img width="25" src="<?php echo e(asset('images/editar.png')); ?>" /></a>

						    	<a href="<?php echo e(route('pet.deletar', $pet->id)); ?>"><img width="30" src="<?php echo e(asset('images/excluir.png')); ?>" /></a>
						    </td>
						</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/pet/listar.blade.php ENDPATH**/ ?>