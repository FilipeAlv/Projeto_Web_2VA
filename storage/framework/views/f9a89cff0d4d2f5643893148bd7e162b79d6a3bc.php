<?php $__env->startSection('title', 'Cadastro de Produto'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5><?php echo e(isset($produto) ? 'Editar Produto' : 'Novo Produto'); ?></h5>
		</div>
  		<div class="card-body mx-5">
			<form action="<?php echo e(isset($produto) ? route ('produto.atualizar', $produto->id ) : route ('produto.salvar' )); ?>" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-row">
				    <div class="form-group col-md-3">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo e(isset( $produto->nome) ? $produto->nome : ''); ?>" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="marca">Marca:</label>
				      	<input type="text" class="form-control" id="marca" name="marca" placeholder="Marca"  value="<?php echo e(isset( $produto->marca) ? $produto->marca : ''); ?>" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="categoria">Categoria:</label>
				      	<input type="text" class="form-control" id="categoria" name="categoria" placeholder="Categoria"  value="<?php echo e(isset( $produto->categoria) ? $produto->categoria : ''); ?>" >
				    </div>
				    <div class="form-group col-md-3">
				      	<label for="valor">Valor:</label>
				      	<input type="number" class="form-control" id="valor" name="valor" placeholder="Valor"  value="<?php echo e(isset( $produto->valor) ? $produto->valor : ''); ?>" >
				    </div>
				</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-5">
					    <label for="dataValidade">Data de Validade:</label>
					    <input type="date" class="form-control" id="dataValidade" placeholder="Data de Validade" name="dataValidade"  value="<?php echo e(isset( $produto->dataValidade) ? $produto->dataValidade : ''); ?>">
				  	</div>
				  	<div class="form-group col-md-5">
					    <label for="dataFabricacao">Data de Fabricação:</label>
					    <input type="date" class="form-control" id="dataFabricacao" placeholder="Data de Fabricação" name="dataFabricacao"  value="<?php echo e(isset( $produto->dataFabricacao) ? $produto->dataFabricacao : ''); ?>">
				  	</div>

					<div class="form-group col-md-2">
					    <label for="quantidade">Quantidade:</label>
					    <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade"  value="<?php echo e(isset( $produto->quantidade) ? $produto->quantidade : ''); ?>">
				  	</div>

			  	</div>

	

				<button type="submit" class="btn btn-primary float-right mt-2">
				<?php echo e(isset($produto) ? 'Salvar Alterações' : 'Cadastrar'); ?></button>

			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/produto/cadastro.blade.php ENDPATH**/ ?>