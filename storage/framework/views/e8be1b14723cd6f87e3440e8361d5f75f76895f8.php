<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="card m-5">
        <div class="card-header">
            <h5>Agenda</h5>
            <a class="btn btn-primary float-right" href="<?php echo e(route('servico.cadastrar')); ?>"> Novo Agendamento</a>
        </div>
        <div class="card-body mx-5">
            <div class="card text-right" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vb\Desktop\projetoweb\resources\views/welcome.blade.php ENDPATH**/ ?>