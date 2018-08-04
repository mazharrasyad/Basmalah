<!DOCTYPE html>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
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

    <p><?php echo $belajar->id; ?></p>
</div>

<!-- Kode Field -->
<div class="form-group">
    <?php echo Form::label('kode', 'Kode Belajar:'); ?>

    <?php echo $belajar->kode; ?>

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

<!-- Pelajaran Field -->
<div class="form-group">
    <?php echo Form::label('pelajaran', 'Pelajaran:'); ?>

    <?php echo $belajar->pelajaran; ?>

</div>

<!-- Alamat Tempat Belajar Field -->
<div class="form-group">
    <?php echo Form::label('alamat_tempat_belajar', 'Alamat Tempat Belajar:'); ?>

    <?php echo $belajar->alamat_tempat_belajar; ?>

</div>

<!-- Hari Field -->
<div class="form-group">
    <?php echo Form::label('hari', 'Hari:'); ?>

    <?php echo $belajar->hari; ?>

</div>

<!-- Pukul Field -->
<div class="form-group">
    <?php echo Form::label('pukul', 'Pukul:'); ?>

    <?php echo $belajar->pukul; ?>

</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo $belajar->status; ?>

</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <p><?php echo $belajar->created_at; ?></p>
</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <p><?php echo $belajar->updated_at; ?></p>
</div>

</body>
</html>
