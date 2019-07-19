<?php $__env->startSection('title', 'Lista de Produtos'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5>Lista de Produtos</h5>
			<a class="btn btn-primary float-right" href="<?php echo e(route('produto.cadastrar')); ?>"> Novo Produto</a>
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
			  		<?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				    	<tr>
						    <th scope="row"><?php echo e($produto->id); ?></th>
						    <td><?php echo e($produto->nome); ?></td>
						    <td><?php echo e($produto->marca); ?></td>
						    <td><?php echo e($produto->quantidade); ?></td>				   
						    <td>R$ <?php echo e($produto->valor); ?> </td>
						    <td> <?php echo e($produto->dataValidade); ?> </td>
						    <td>
						    	<a href="<?php echo e(route('produto.editar', $produto->id)); ?>"><img width="25" src="<?php echo e(asset('images/editar.png')); ?>" /></a>

						    	<a href="<?php echo e(route('produto.deletar', $produto->id)); ?>"><img width="30" src="<?php echo e(asset('images/excluir.png')); ?>" /></a>
						    </td>
						</tr>
				    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  </tbody>
			</table>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aluno\Desktop\Projeto_Web_2VA\resources\views/produto/listar.blade.php ENDPATH**/ ?>