<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Data Belajar
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($belajar, ['route' => ['belajars.update', $belajar->id], 'method' => 'patch']); ?>


                   <?php if(Auth::user()->role_id == 1): ?>
                         <?php echo $__env->make('belajars.fields_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <?php elseif(Auth::user()->role_id == 3): ?>
                         <?php echo $__env->make('belajars.fields_pengajar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <?php endif; ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>