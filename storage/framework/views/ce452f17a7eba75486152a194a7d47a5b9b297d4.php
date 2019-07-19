<?php $__env->startSection('title', 'Cadastro de Agendamento'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
	<div class="card m-5">
		<div class="card-header">
			<h5><?php echo e(isset($agendamento) ? 'Editar Agendamento' : 'Novo Agendamento'); ?></h5>
		</div>
  		<div class="card-body mx-5">
			<form action="<?php echo e(isset($agendamento) ? route ('agendamento.atualizar', $agendamento->id ) : route ('agendamento.salvar' )); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="status" value="agendado">
				<div class="form-row">	
				    <div class="form-group col-md-6">
				      	<label for="pet_id">Pet:</label>
				      	<select id="pet_id" name="pet_id" class="form-control"  >
					        <option selected disabled> Pet </option>
					        
					        <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					        	<?php 
					        		$dono = \App\ClienteModel::all()->where('id', $pet->id_dono)->first();
					        	?>

					        	<option value="<?php echo e($pet->id); ?>"> <?php echo e($pet->nome . " " . $dono->nome . " - " . $dono->cpf); ?> </option>

					        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			      		</select>
			    	</div>
			    	<div class="form-group col-md-6">
				      	<label for="servico">Serviço:</label>
				      	<select id="servico" name="servico_id" class="form-control"  >
					        <option selected disabled> Serviço </option>
					        
					        <?php $__currentLoopData = $servicos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servico): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					        	
					        	<option value="<?php echo e($servico->id); ?>"> <?php echo e($servico->nome . " -R$" . $servico->valor); ?> </option>

					        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			      		</select>
			    	</div>
			  	</div>

			  	<div class="form-row">
				  	<div class="form-group col-md-6">
					    <label for="dataAgendada">Data de Agendamento:</label>
					    <input type="date" class="form-control" id="dataAgendada" placeholder="Data de Agendamento" name="dataAgendada"  value="<?php echo e(isset( $agendamento->dataAgendada) ? $agendamento->dataAgendada : ''); ?>">
				  	</div>
				  	<div class="form-group col-md-6">
				      	<label for="horaAgendada">Hora de Agendamento:</label>
				      	<input type="time" class="form-control" id="horaAgendada" name="horaAgendada" placeholder="Hora de Agendamento"  value="<?php echo e(isset( $agendamento->horaAgendada) ? $agendamento->horaAgendada : ''); ?>" >
				    </div>
			  	</div>

			  	<?php if(isset($agendamento)): ?>

				  	<div class="form-row">
					  	<div class="form-group col-md-6">
						    <label for="dataInicio">Data de Inicio:</label>
						    <input type="date" class="form-control" id="dataInicio" placeholder="Data de Inicio" name="dataInicio"  value="<?php echo e(isset( $agendamento->dataInicio) ? $agendamento->dataInicio : ''); ?>">
					  	</div>
					  	<div class="form-group col-md-6">
					      	<label for="horaInicio">Hora de Inicio:</label>
					      	<input type="time" class="form-control" id="horaInicio" name="horaInicio" placeholder="Hora de Inicio"  value="<?php echo e(isset( $agendamento->horaInicio) ? $agendamento->horaInicio : ''); ?>" >
					    </div>
				  	</div>

				  	<div class="form-row">
					  	<div class="form-group col-md-6">
						    <label for="dataFim">Data de Termino:</label>
						    <input type="date" class="form-control" id="dataFim" placeholder="Data de Fim" name="dataFim"  value="<?php echo e(isset( $agendamento->dataFim) ? $agendamento->dataFim : ''); ?>">
					  	</div>
					  	<div class="form-group col-md-6">
					      	<label for="horaFim">Hora de Termino:</label>
					      	<input type="time" class="form-control" id="horaFim" name="horaFim" placeholder="Hora de Fim"  value="<?php echo e(isset( $agendamento->horaFim) ? $agendamento->horaFim : ''); ?>" >
					    </div>
				  	</div>

				  	<a href="<?php echo e(route('home')); ?>" class="btn btn-primary float-right m-2">Voltar</a>

				  	<a href="<?php echo e(route('agendamento.cancelar', $agendamento->id)); ?>" class="btn btn-danger float-right mt-2">Cancelar Agendamento</a>

				<?php else: ?>
					<button type="submit" class="btn btn-primary float-right mt-2"> Cadastrar</button>
				<?php endif; ?>

			  	
				

			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/agendamento/cadastro.blade.php ENDPATH**/ ?>