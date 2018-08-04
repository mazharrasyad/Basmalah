<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
          $("#tombol").click(function(){
              $("#isi").toggle(1000);
          });
      });
    </script>
  </head>
<body>

<!-- Nama Lengkap Field -->
<div class="form-group">
    <?php echo Form::label('nama_lengkap', 'Nama Lengkap:'); ?>

    <?php echo $dkm->nama_lengkap; ?>

</div>

<!-- Alamat Field -->
<div class="form-group">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo $dkm->alamat; ?>

</div>

<!-- No Handphone Field -->
<div class="form-group">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo $dkm->no_handphone; ?>

</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo $dkm->email; ?>

</div>

<!-- Nama Masjid Field -->
<div class="form-group">
    <?php echo Form::label('nama_masjid', 'Nama Masjid:'); ?>

    <?php echo $dkm->nama_masjid; ?>

</div>

<!-- Alamat Masjid Field -->
<div class="form-group">
    <?php echo Form::label('alamat_masjid', 'Alamat Masjid:'); ?>

    <?php echo $dkm->alamat_masjid; ?>

</div>

<!-- Jabatan Di Masjid Field -->
<div class="form-group">
    <?php echo Form::label('jabatan_di_masjid', 'Jabatan Di Masjid:'); ?>

    <?php echo $dkm->jabatan_di_masjid; ?>

</div>

<!-- No Rekening Masjid Field -->
<div class="form-group">
    <?php echo Form::label('no_rekening_masjid', 'No Rekening Masjid:'); ?>

    <?php echo $dkm->no_rekening_masjid; ?>

</div>

<!-- Pengangguran Id Field -->
<div class="form-group">
    <?php echo Form::label('membina', 'Membina:'); ?>

    <a class='btn btn-default btn-xs' id="tombol"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi" hidden>
      <text hidden><?php echo $i = 1; ?></text>
      <?php $__currentLoopData = $penganggurans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangguran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($dkm->user_id == $pengangguran->user_id): ?>
          &emsp;&emsp;
          <b><?php echo $i; ?>.
          <?php echo $pengangguran->nama_lengkap; ?> </b>
          [Kode <?php echo $pengangguran->kode; ?>] =>
          Status :
            <?php if($pengangguran->status == "Menganggur"): ?>
              <font color="green">
            <?php elseif($pengangguran->status == "Belajar"): ?>
              <font color="blue">
            <?php else: ?>
              <font color="red">
            <?php endif; ?>
          <b><?php echo $pengangguran->status; ?></b> </font>
          <br>
          <text hidden><?php echo $i++; ?></text>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>
