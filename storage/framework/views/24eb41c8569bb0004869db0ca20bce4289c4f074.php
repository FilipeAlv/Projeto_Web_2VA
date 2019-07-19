<?php $__env->startSection('title', 'Lista de Usuários'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de U´suários</h5>
			<a class="btn btn-primary float-right" href="<?php echo e(route('pet.cadastrar')); ?>"> Novo Usuário</a>
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
			  		<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		
				    	<tr>
						    <th scope="row"><?php echo e($usuario->id); ?></th>
						    <td><?php echo e($usuario->name); ?></td>						    
						    <td>
						    	<a href="<?php echo e(route('usuario.editar', $usuario->id)); ?>"><img width="25" src="<?php echo e(asset('images/editar.png')); ?>" /></a>

						    	<a href="<?php echo e(route('usuario.deletar', $usuario->id)); ?>"><img width="30" src="<?php echo e(asset('images/excluir.png')); ?>" /></a>
						    </td>
						</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/auth/listar.blade.php ENDPATH**/ ?>