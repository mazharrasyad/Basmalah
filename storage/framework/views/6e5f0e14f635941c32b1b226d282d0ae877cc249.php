<?php $__env->startSection('title', 'Halaman Error'); ?>

<?php $__env->startSection('message', 'Terjadi Kesalahan Pada Halaman Ini'); ?>

<?php echo $__env->make('errors::layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>