<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo Form::text('no_handphone', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 081290351971']); ?>

</div>

<!-- Pesan Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('pesan', 'Pesan:'); ?>

    <?php echo Form::textarea('pesan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Saya ingin melaporkan bahwa alamat Masjid Al Huda daerah depok kurang tepat. Alamat yang tepatnya yaitu : "Jalan Tole Iskandar No.3, Mekar Jaya, Sukmajaya, Mekar Jaya, Sukmajaya, Kota Depok, Jawa Barat 16412". Mungkin itu saja, tolong untuk ditindak lanjuti.']); ?>

</div>

<!-- Url Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('url', 'Url:'); ?>

    <?php echo Form::text('url', $laporan+1, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Lapor', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-default">Batal</a>
</div>
