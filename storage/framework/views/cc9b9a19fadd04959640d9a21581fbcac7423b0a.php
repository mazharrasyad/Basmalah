<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1 class="pull-left">Data Belajar</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
          <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="clearfix"></div>
        <div class="box box-primary">
        <div class="box-body">
                  <?php if(Auth::user()->role_id == 1): ?>
                    <?php echo $__env->make('belajars.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif(Auth::user()->role_id == 2): ?>
                    <?php echo $__env->make('belajars.table_dkm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif(Auth::user()->role_id == 3): ?>
                    <?php echo $__env->make('belajars.table_pengajar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php endif; ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>