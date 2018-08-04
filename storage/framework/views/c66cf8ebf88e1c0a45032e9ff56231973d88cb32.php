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
    </script>
  </head>
<body>

<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <?php echo $donasi->id; ?>

</div>

<!-- No Handphone Field -->
<div class="form-group">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo $donasi->no_handphone; ?>

</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo $donasi->email; ?>

</div>

<!-- DKM Id Field -->
<div class="form-group">
    <?php echo Form::label('dkm_id', 'DKM:'); ?>

    <?php echo $donasi->dkms['email']; ?>

    <a class='btn btn-default btn-xs' id="tombol_dkm"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_dkm" hidden>
    <?php echo Form::label('dkm_id', 'Alamat:'); ?> <?php echo $donasi->dkms['nama_lengkap']; ?> <br>
    <?php echo Form::label('dkm_id', 'Alamat:'); ?> <?php echo $donasi->dkms['alamat']; ?> <br>
    <?php echo Form::label('dkm_id', 'No Handphone:'); ?> <?php echo $donasi->dkms['no_handphone']; ?> <br>
    <?php echo Form::label('dkm_id', 'Nama Masjid:'); ?> <?php echo $donasi->dkms['nama_masjid']; ?> <br>
    <?php echo Form::label('dkm_id', 'Alamat Masjid:'); ?> <?php echo $donasi->dkms['alamat_masjid']; ?> <br>
    <?php echo Form::label('dkm_id', 'Jabatan di Masjid:'); ?> <?php echo $donasi->dkms['jabatan_di_masjid']; ?> <br>
    <?php echo Form::label('dkm_id', 'No Rekening Masjid:'); ?> <?php echo $donasi->dkms['no_rekening_masjid']; ?> <br>
    </p>
</div>

<!-- Nominal Field -->
<div class="form-group">
    <?php echo Form::label('nominal', 'Nominal:'); ?>

    <?php echo $donasi->nominal; ?>

</div>

<!-- Pesan Field -->
<div class="form-group">
    <?php echo Form::label('pesan', 'Pesan:'); ?>

    <?php echo $donasi->pesan; ?>

</div>

<!-- Transfer Bank Field -->
<div class="form-group">
    <?php echo Form::label('transfer_bank', 'Transfer Bank:'); ?>

    <?php echo $donasi->transfer_bank; ?>

</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo $donasi->status; ?>

</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <?php echo $donasi->created_at; ?>

</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <?php echo $donasi->updated_at; ?>

</div>
