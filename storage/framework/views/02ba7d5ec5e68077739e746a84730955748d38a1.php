<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Data Pengangguran - <?php echo e(Auth::user()->name); ?>

        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($pengangguran, ['route' => ['penganggurans.update', $pengangguran->id], 'method' => 'patch']); ?>

                   <?php if(Auth::user()->role_id == 1): ?>
                        <?php echo $__env->make('penganggurans.fields_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <?php elseif(Auth::user()->role_id == 2): ?>
                        <?php echo $__env->make('penganggurans.fields_dkm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                   <?php endif; ?>
                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>