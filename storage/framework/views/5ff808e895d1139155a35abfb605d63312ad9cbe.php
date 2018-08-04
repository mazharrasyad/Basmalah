<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1 class="pull-left">Data Pengajar</h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
              <?php if(auth()->guard()->check()): ?>
                <?php echo $__env->make('pengajars.table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <?php else: ?>
                <?php echo $__env->make('pengajars.table_pengunjung', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              <?php endif; ?>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>