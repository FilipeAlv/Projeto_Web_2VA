<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="card m-5">
        <div class="card-header">
            <h5>Agenda</h5>
            <a class="btn btn-primary float-right" href="<?php echo e(route('agendamento.cadastrar')); ?>"> Novo Agendamento</a>
        </div>

        <?php $__currentLoopData = $agendamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agendamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $pet = \App\PetModel::all()->where('id', $agendamento->pet_id)->first();
                $dono = \App\ClienteModel::all()->where('id', $pet->id_dono)->first();
                $servico = \App\ServicoModel::all()->where('id', $agendamento->servico_id)->first();
            ?> 

            <div class="card-body mx-2">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title text-center" > <?php echo e($pet->nome." - ".$dono->nome." (".$dono->cpf .")"); ?> </h5>
                    <p class="card-text ">Serviço: <?php echo e($servico->nome." - R$".$servico->valor); ?></p>
                    <p class="card-text ">Data: <?php echo e($agendamento->dataAgendada); ?> </p>
                    <p class="card-text "> Hora: <?php echo e($agendamento->horaAgendada); ?></p>
                   
                    <?php if($agendamento->status == "agendado"): ?>
                        <a href="<?php echo e(route('agendamento.iniciar' , $agendamento->id)); ?>" class="btn btn-success mx-3 float-right" >Iniciar</a>
                    <?php else: ?>
                           <a href="<?php echo e(route('agendamento.finalizar' , $agendamento->id)); ?>" class="btn btn-danger mx-3 float-right" >Finalizar</a>
                    <?php endif; ?>

                     <a href="<?php echo e(route('agendamento.detalhe' , $agendamento->id)); ?>" class="btn btn-primary float-right" >Detalhes </a>
                    
                  </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\Nova pasta\Projeto_Web_2VA\resources\views/agendamento/listar.blade.php ENDPATH**/ ?>