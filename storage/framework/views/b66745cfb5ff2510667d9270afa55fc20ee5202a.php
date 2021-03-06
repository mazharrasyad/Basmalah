<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_lengkap', 'Nama Lengkap:'); ?>

    <?php echo Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Muhammad Azhar Rasyad']); ?>

</div>

<!-- Agama Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('agama', 'Agama:'); ?>

    <?php echo Form::select('agama', ['Islam' => 'Islam', 'Nasrani' => 'Nasrani', 'Yahudi' => 'Yahudi', 'Lainnya' => 'Lainnya'], null, ['class' => 'form-control']); ?>

</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-12">
    <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin:'); ?>

    <label class="radio-inline">
        <?php echo Form::radio('jenis_kelamin', "Pria", null); ?> Pria
    </label>

    <label class="radio-inline">
        <?php echo Form::radio('jenis_kelamin', "Wanita", null); ?> Wanita
    </label>

</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Perumahan Persada Alam Blok B1 No 18, Pondok Rajeg, Cibinong, Jawa Barat, 16914']); ?>

</div>

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

<!-- Bidang Keahlian Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('bidang_keahlian', 'Bidang Keahlian:'); ?>

    <?php echo Form::text('bidang_keahlian', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Memasak']); ?>

</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('url', 'URL:'); ?>

    <?php echo Form::text('url', $pengajar+1, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Daftar', ['class' => 'btn btn-primary']); ?>

    <?php if(auth()->guard()->check()): ?>
      <a href="<?php echo route('dkms.index'); ?>" class="btn btn-default">Batal</a>
    <?php else: ?>
      <a href="<?php echo e(url('/')); ?>" class="btn btn-default">Batal</a>
    <?php endif; ?>
</div>
