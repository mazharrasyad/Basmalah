<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_lengkap', 'Nama Lengkap:'); ?>

    <?php echo Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Muhammad Azhar Rasyad']); ?>

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

<!-- Nama Masjid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nama_masjid', 'Nama Masjid:'); ?>

    <?php echo Form::text('nama_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Masjid Al Muhajirin']); ?>

</div>

<!-- Alamat Masjid Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('alamat_masjid', 'Alamat Masjid:'); ?>

    <?php echo Form::textarea('alamat_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Jl. Bulakrata, Cibinong, Pd. Rajeg, Bogor, Jawa Barat 16914']); ?>

</div>

<!-- Jabatan Di Masjid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('jabatan_di_masjid', 'Jabatan Di Masjid:'); ?>

    <?php echo Form::text('jabatan_di_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Ketua Dewan Kemakmuran Masjid']); ?>

</div>

<!-- No Rekening Masjid Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('no_rekening_masjid', 'No Rekening Masjid:'); ?>

    <?php echo Form::text('no_rekening_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 1330014415715']); ?>

</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::select('status', ['Pending' => 'Pending', 'Disetujui' => 'Disetujui', 'Ditolak' => 'Ditolak'], null, ['class' => 'form-control']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('user_id', 'User:'); ?>

    <?php echo Form::select('user_id', $user, null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('dkms.index'); ?>" class="btn btn-default">Batal</a>
</div>
