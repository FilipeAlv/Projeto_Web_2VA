<?php $__env->startSection('title', 'Cadastro de Serviço'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5><?php echo e(isset($servico) ? 'Editar Serviço' : 'Novo Serviço'); ?></h5>
		</div>
  		<div class="card-body mx-5">
			<form action="<?php echo e(isset($servico) ? route ('servico.atualizar', $servico->id ) : route ('servico.salvar' )); ?>" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo e(isset( $servico->nome) ? $servico->nome : ''); ?>" >
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="valor">Valor:</label>
				      	<input type="text" class="form-control" id="valor" name="valor" placeholder="Valor"  value="<?php echo e(isset( $servico->valor) ? $servico->valor : ''); ?>" >
				    </div>
				    
				</div>	

				<button type="submit" class="btn btn-primary float-right mt-2">
				<?php echo e(isset($servico) ? 'Salvar Alterações' : 'Cadastrar'); ?></button>

			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/servico/cadastro.blade.php ENDPATH**/ ?>