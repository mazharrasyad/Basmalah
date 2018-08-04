<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Data Pengangguran - <?php echo e(Auth::user()->name); ?>

        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  <?php if(Auth::user()->role_id == 1): ?>
                       <?php echo $__env->make('penganggurans.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php elseif(Auth::user()->role_id == 2): ?>
                       <?php echo $__env->make('penganggurans.show_fields_dkm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php endif; ?>
                    <a href="<?php echo route('penganggurans.index'); ?>" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>