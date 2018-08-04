<!-- Kode Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('kode', 'Kode:'); ?>

    <?php echo Form::text('kode', $belajar->kode, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::text('user_id', $belajar->user_id, ['class' => 'form-control']); ?>

</div>

<!-- Pelajaran Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pelajaran', 'Pelajaran:'); ?>

    <?php echo Form::text('pelajaran', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Berternak Lele']); ?>

</div>

<!-- Alamat Tempat Belajar Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('alamat_tempat_belajar', 'Alamat Tempat Belajar:'); ?>

    <?php echo Form::textarea('alamat_tempat_belajar', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Perumahan Persada Alam Blok B1 No 18, Pondok Rajeg, Cibinong, Jawa Barat, 16914']); ?>

</div>

<!-- Hari Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('hari', 'Hari:'); ?>

    <?php echo Form::select('hari', ['Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu', 'Ahad' => 'Ahad'], null, ['class' => 'form-control']); ?>

</div>

<!-- Pukul Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pukul', 'Pukul:'); ?>

    <?php echo Form::select('pukul', ['07.00 - 09.00' => '07.00 - 09.00', '09.00 - 11.00' => '09.00 - 11.00', '12.30 - 14.30' => '12.30 - 14.30', '15.30 - 17.30' => '15.30 - 17.30'], null, ['class' => 'form-control']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::select('status', ['Pending' => 'Pending', 'Aktif' => 'Aktif', 'Selesai' => 'Selesai'], null, ['class' => 'form-control']); ?>

</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('url', 'URL:'); ?>

    <?php echo Form::text('url', $belajar->url, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('belajars.index'); ?>" class="btn btn-default">Batal</a>
</div>
