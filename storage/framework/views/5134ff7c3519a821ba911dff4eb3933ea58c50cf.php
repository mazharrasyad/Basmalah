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

    <?php echo $pengajar->nama_lengkap; ?>

</div>

<!-- Agama Field -->
<div class="form-group">
    <?php echo Form::label('agama', 'Agama:'); ?>

    <?php echo $pengajar->agama; ?>

</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    <?php echo Form::label('jenis_kelamin', 'Jenis Kelamin:'); ?>

    <?php echo $pengajar->jenis_kelamin; ?>

</div>

<!-- Alamat Field -->
<div class="form-group">
    <?php echo Form::label('alamat', 'Alamat:'); ?>

    <?php echo $pengajar->alamat; ?>

</div>

<!-- No Handphone Field -->
<div class="form-group">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo $pengajar->no_handphone; ?>

</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo $pengajar->email; ?>

</div>

<!-- Bidang Keahlian Field -->
<div class="form-group">
    <?php echo Form::label('bidang_keahlian', 'Bidang Keahlian:'); ?>

    <?php echo $pengajar->bidang_keahlian; ?>

</div>

<!-- Belajar Id Field -->
<div class="form-group">
    <?php echo Form::label('mengajar', 'Mengajar:'); ?>

    <a class='btn btn-default btn-xs' id="tombol"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi" hidden>
      <text hidden><?php echo $i = 1; ?></text>
      <?php $__currentLoopData = $belajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $belajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($pengajar->user_id == $belajar->user_id): ?>
          &emsp;&emsp;
          <b><?php echo $i; ?>.
          <?php echo $belajar->pelajaran; ?> </b>
          [Kode <?php echo $belajar->kode; ?>] =>
          Status :
            <?php if($belajar->status == "Pending"): ?>
              <font color="green">
            <?php elseif($belajar->status == "Belajar"): ?>
              <font color="blue">
            <?php else: ?>
              <font color="red">
            <?php endif; ?>
          <b><?php echo $belajar->status; ?></b> </font>
          <br>
          <text hidden><?php echo $i++; ?></text>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
</div>
