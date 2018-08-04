<?php if(Auth::user()->role_id == 1): ?>


<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Data User
        </h1>
   </section>
   <div class="content">
       <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   <?php echo Form::model($pengguna, ['route' => ['penggunas.update', $pengguna->id], 'method' => 'patch']); ?>


                        <?php echo $__env->make('penggunas.fields_edit', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                   <?php echo Form::close(); ?>

               </div>
           </div>
       </div>
   </div>
<?php $__env->stopSection(); ?>
<?php endif; ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>