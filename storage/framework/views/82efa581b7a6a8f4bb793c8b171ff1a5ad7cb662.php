<?php $__env->startSection('title', 'Cadastro de Pet'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5><?php echo e(isset($pet) ? 'Editar Pet' : 'Novo Pet'); ?></h5>
		</div>
  		<div class="card-body mx-5">
			<form action="<?php echo e(isset($pet) ? route ('pet.atualizar', $pet->id ) : route ('pet.salvar' )); ?>" method="post">
				<?php echo csrf_field(); ?>
				<div class="form-row">
				    <div class="form-group col-md-6">
				    	<label for="nome">Nome:</label>
				      	<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo e(isset( $pet->nome) ? $pet->nome : ''); ?> " >
				    </div>
				    <div class="form-group col-md-6">
				    	<label for="dataNescimento">Data Nascimento:</label>
					      <input type="date" class="form-control" id="dataNescimento" placeholder="Data de Nascimento" name="dataNascimento"  value="<?php echo e(isset( $pet->dataNascimento ) ? $pet->dataNascimento : ''); ?>">
				    </div>
				</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-6">
					    <label for="especie">Espécie:</label>
					    <input type="text" class="form-control" id="especie" placeholder="Espécie" name="especie"  value="<?php echo e(isset( $pet->especie) ? $pet->especie : ''); ?> ">
				  	</div>
				  	<div class="form-group col-md-6">
				      	<label for="raca">Raça:</label>
				      	<input type="text" class="form-control" id="raca" name="raca" placeholder="Raça"  value="<?php echo e(isset( $pet->raca) ? $pet->raca : ''); ?> " >
				    </div>
			  	</div>

			  	<div class="form-row">
				    		
				    <div class="form-group col-md-12">
				      	<label for="id_dono">Dono:</label>
				      	<select id="id_dono" name="id_dono" class="form-control"  >
					        <option selected disabled> Dono </option>
					        
					        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					        	<option value="<?php echo e($cliente->id); ?>"> <?php echo e($cliente->nome . " " . $cliente->sobrenome . " - " . $cliente->cpf); ?> </option>
					        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			      		</select>
			    	</div>
			  	</div>

				<button type="submit" class="btn btn-primary float-right mt-2">
				<?php echo e(isset($pet) ? 'Salvar Alterações' : 'Cadastrar'); ?></button>

			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/pet/cadastro.blade.php ENDPATH**/ ?>