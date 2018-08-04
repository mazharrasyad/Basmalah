<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo Form::text('no_handphone', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 081290351971']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Contoh : muhazharrasyad@gmail.com']); ?>

</div>

<!-- Dkm Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('dkm_id', 'Email Dewan Kemakmuran Masjid:'); ?>

    <?php echo Form::select('dkm_id', $dkm, null, ['class' => 'form-control']); ?>

</div>

<!-- Nominal Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nominal', 'Nominal:'); ?>

    <?php echo Form::number('nominal', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 100000']); ?>

</div>

<!-- Pesan Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('pesan', 'Pesan:'); ?>

    <?php echo Form::textarea('pesan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Semangat']); ?>

</div>

<!-- Transfer Bank Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('transfer_bank', 'Transfer Bank:'); ?>

    <?php echo Form::select('transfer_bank', ['BCA' => 'BCA', 'BRI' => 'BRI', 'BNI' => 'BNI', 'Mandiri' => 'Mandiri'], null, ['class' => 'form-control']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::select('status', ['Pending' => 'Pending', 'Selesai' => 'Selesai'], null, ['class' => 'form-control']); ?>

</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('url', 'URL:'); ?>

    <?php echo Form::text('url', $donasi+1, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Daftar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-default">Batal</a>
</div>
