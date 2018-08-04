<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#tombol_pengangguran").click(function(){
              $("#isi_pengangguran").toggle(1000);
          });
      });

      $(document).ready(function(){
          $("#tombol_dkm").click(function(){
              $("#isi_dkm").toggle(1000);
          });
      });

      $(document).ready(function(){
          $("#tombol_belajar").click(function(){
              $("#isi_belajar").toggle(1000);
          });
      });

      $(document).ready(function(){
          $("#tombol_pengajar").click(function(){
              $("#isi_pengajar").toggle(1000);
          });
      });
    </script>
  </head>
<body>

<!-- Id Field -->
<div class="form-group" hidden>
    <?php echo Form::label('id', 'Id:'); ?>

    <?php echo $jadwal->id; ?>

</div>

<!-- Pengangguran Id Field -->
<div class="form-group">
    <?php echo Form::label('pengangguran_id', 'Kode Pengangguran:'); ?>

    <?php $__currentLoopData = $penganggurans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangguran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($jadwal->pengangguran_id == $pengangguran->id): ?>
    <?php echo $pengangguran->kode; ?>

    <a class='btn btn-default btn-xs' id="tombol_pengangguran"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_pengangguran" hidden>
    <?php echo Form::label('pengangguran_id', 'Nama Lengkap:'); ?> <?php echo $pengangguran->nama_lengkap; ?> <br>
    <?php echo Form::label('pengangguran_id', 'Agama:'); ?> <?php echo $pengangguran->agama; ?> <br>
    <?php echo Form::label('pengangguran_id', 'Jenis Kelamin:'); ?> <?php echo $pengangguran->jenis_kelamin; ?> <br>
    <?php echo Form::label('pengangguran_id', 'Alamat:'); ?> <?php echo $pengangguran->alamat; ?> <br>
    <?php echo Form::label('pengangguran_id', 'Pendidikan Terakhir:'); ?> <?php echo $pengangguran->pendidikan_terakhir; ?> <br>
    <?php echo Form::label('pengangguran_id', 'Peminatan:'); ?> <?php echo $pengangguran->peminatan; ?> <br>
    </p>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- DKM Id Field -->
<div class="form-group">
    <?php echo Form::label('dkm_id', 'DKM:'); ?>

    <?php $__currentLoopData = $dkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($pengangguran->user_id == $dkm->user_id): ?>
    <?php echo $dkm->nama_lengkap; ?>

    <a class='btn btn-default btn-xs' id="tombol_dkm"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_dkm" hidden>
    <?php echo Form::label('dkm_id', 'Alamat:'); ?> <?php echo $dkm->alamat; ?> <br>
    <?php echo Form::label('dkm_id', 'No Handphone:'); ?> <?php echo $dkm->no_handphone; ?> <br>
    <?php echo Form::label('dkm_id', 'Email:'); ?> <?php echo $dkm->email; ?> <br>
    <?php echo Form::label('dkm_id', 'Nama Masjid:'); ?> <?php echo $dkm->nama_masjid; ?> <br>
    <?php echo Form::label('dkm_id', 'Alamat Masjid:'); ?> <?php echo $dkm->alamat_masjid; ?> <br>
    <?php echo Form::label('dkm_id', 'Jabatan di Masjid:'); ?> <?php echo $dkm->jabatan_di_masjid; ?> <br>
    <?php echo Form::label('dkm_id', 'No Rekening Masjid:'); ?> <?php echo $dkm->no_rekening_masjid; ?> <br>
    </p>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Belajar Id Field -->
<div class="form-group">
    <?php echo Form::label('belajar_id', 'Kode Belajar:'); ?>

    <?php $__currentLoopData = $belajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $belajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($jadwal->belajar_id == $belajar->id): ?>
    <?php echo $belajar->kode; ?>

    <a class='btn btn-default btn-xs' id="tombol_belajar"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_belajar" hidden>
    <?php echo Form::label('belajar_id', 'Pelajaran:'); ?> <?php echo $belajar->pelajaran; ?> <br>
    <?php echo Form::label('belajar_id', 'Alamat Tempat belajar:'); ?> <?php echo $belajar->alamat_tempat_belajar; ?> <br>
    <?php echo Form::label('belajar_id', 'Hari:'); ?> <?php echo $belajar->hari; ?> <br>
    <?php echo Form::label('belajar_id', 'Pukul:'); ?> <?php echo $belajar->pukul; ?> <br>
    </p>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Pengajar Id Field -->
<div class="form-group">
  <?php echo Form::label('pengajar_id', 'Pengajar:'); ?>

  <?php $__currentLoopData = $pengajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($belajar->user_id == $pengajar->user_id): ?>
  <?php echo $pengajar->nama_lengkap; ?>

  <a class='btn btn-default btn-xs' id="tombol_pengajar"><i class="glyphicon glyphicon-eye-open"></i></a>
  <p id="isi_pengajar" hidden>
  <?php echo Form::label('pengajar_id', 'Agama:'); ?> <?php echo $pengajar->agama; ?> <br>
  <?php echo Form::label('pengajar_id', 'Jenis Kelamin:'); ?> <?php echo $pengajar->jenis_kelamin; ?> <br>
  <?php echo Form::label('pengajar_id', 'Alamat:'); ?> <?php echo $pengajar->alamat; ?> <br>
  <?php echo Form::label('pengajar_id', 'No Handphone:'); ?> <?php echo $pengajar->no_handphone; ?> <br>
  <?php echo Form::label('pengajar_id', 'Email:'); ?> <?php echo $pengajar->email; ?> <br>
  <?php echo Form::label('pengajar_id', 'Bidang Keahlian:'); ?> <?php echo $pengajar->bidang_keahlian; ?> <br>
  </p>
  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <?php echo $jadwal->created_at; ?>

</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <?php echo $jadwal->updated_at; ?>

</div>
