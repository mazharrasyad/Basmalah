<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#tombol_dkm").click(function(){
              $("#isi_dkm").toggle(1000);
          });
      });

      $(document).ready(function(){
          $("#tombol_jadwal").click(function(){
              $("#isi_jadwal").toggle(1000);
          });
      });
    </script>
  </head>
<body>

<!-- Id Field -->
<div class="form-group" hidden>
    <?php echo Form::label('id', 'Id:'); ?>

    <p><?php echo $pengangguran->id; ?></p>
</div>

<!-- Kode Field -->
<div class="form-group">
    <?php echo Form::label('kode', 'Kode:'); ?>

    <?php echo $pengangguran->kode; ?>

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

<!-- Nama Lengkap Field -->
<div class="form-group">
    <?php echo Form::label('nama_lengkap', 'Nama Lengkap:'); ?>

    <?php echo $pengangguran->nama_lengkap; ?>

</div>

<!-- Agama Field -->
<div class="form-group">
    <?php echo Form::label('agama', 'Agama:'); ?>

    <?php echo $pengangguran->agama; ?>

</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin:'); ?>

    <?php echo $pengangguran->jenis_kelamin; ?>

</div>

<!-- Alamat Field -->
<div class="form-group">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo $pengangguran->alamat; ?>

</div>

<!-- Pendidikan Terakhir Field -->
<div class="form-group">
    <?php echo Form::label('pendidikan_terakhir', 'Pendidikan Terakhir:'); ?>

    <?php echo $pengangguran->pendidikan_terakhir; ?>

</div>

<!-- Peminatan Field -->
<div class="form-group">
    <?php echo Form::label('peminatan', 'Peminatan:'); ?>

    <?php echo $pengangguran->peminatan; ?>

</div>

<!-- Lama Menganggur Field -->
<div class="form-group">
    <?php echo Form::label('lama_menganggur', 'Lama Menganggur:'); ?>

    <?php echo $pengangguran->lama_menganggur; ?>

</div>

<!-- Jumlah Orang Tanggungan Field -->
<div class="form-group">
    <?php echo Form::label('jumlah_orang_tanggungan', 'Jumlah Orang Tanggungan:'); ?>

    <?php echo $pengangguran->jumlah_orang_tanggungan; ?>

</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo $pengangguran->status; ?>

</div>

<!-- User Id Field -->
<div class="form-group" hidden>
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <p><?php echo $pengangguran->user_id; ?></p>
</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $pengangguran->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $pengangguran->updated_at; ?></p>
</div>

<!-- Jadwal Field -->
<div class="form-group">
    <?php echo Form::label('mengikuti', 'Mengikuti:'); ?>

    <a class='btn btn-default btn-xs' id="tombol_jadwal"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_jadwal" hidden>
      <text hidden><?php echo $i = 1; ?></text>
      <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($dkm->user_id == $jadwal->user_id): ?>
          &emsp;&emsp;
          <b><?php echo $i; ?>. </b>
          Kode Belajar <?php echo $jadwal->belajars['kode']; ?> =>
          Status :
            <?php if($jadwal->status == "Menganggur"): ?>
              <font color="green">
            <?php elseif($jadwal->status == "Diterima"): ?>
              <font color="blue">
            <?php else: ?>
              <font color="red">
            <?php endif; ?>
          <b><?php echo $jadwal->status; ?></b> </font>
          <br>
          <text hidden><?php echo $i++; ?></text>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>
