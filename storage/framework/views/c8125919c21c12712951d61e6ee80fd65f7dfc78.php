<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1>
            Data Dewan Kemakmuran Masjid
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                  <?php if(auth()->guard()->check()): ?>
                    <?php echo $__env->make('dkms.show_fields', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php else: ?>
                    <?php echo $__env->make('dkms.show_fields_pengunjung', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                  <?php endif; ?>
                    <a href="<?php echo route('dkms.index'); ?>" class="btn btn-default">Kembali</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>