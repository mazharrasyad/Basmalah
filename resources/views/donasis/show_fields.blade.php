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
    {!! Form::label('id', 'Id:') !!}
    {!! $donasi->id !!}
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! $donasi->no_handphone !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $donasi->email !!}
</div>

<!-- DKM Id Field -->
<div class="form-group">
    {!! Form::label('dkm_id', 'DKM:') !!}
    {!! $donasi->dkms['email'] !!}
    <a class='btn btn-default btn-xs' id="tombol_dkm"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_dkm" hidden>
    {!! Form::label('dkm_id', 'Alamat:') !!} {!! $donasi->dkms['nama_lengkap'] !!} <br>
    {!! Form::label('dkm_id', 'Alamat:') !!} {!! $donasi->dkms['alamat'] !!} <br>
    {!! Form::label('dkm_id', 'No Handphone:') !!} {!! $donasi->dkms['no_handphone'] !!} <br>
    {!! Form::label('dkm_id', 'Nama Masjid:') !!} {!! $donasi->dkms['nama_masjid'] !!} <br>
    {!! Form::label('dkm_id', 'Alamat Masjid:') !!} {!! $donasi->dkms['alamat_masjid'] !!} <br>
    {!! Form::label('dkm_id', 'Jabatan di Masjid:') !!} {!! $donasi->dkms['jabatan_di_masjid'] !!} <br>
    {!! Form::label('dkm_id', 'No Rekening Masjid:') !!} {!! $donasi->dkms['no_rekening_masjid'] !!} <br>
    </p>
</div>

<!-- Nominal Field -->
<div class="form-group">
    {!! Form::label('nominal', 'Nominal:') !!}
    {!! $donasi->nominal !!}
</div>

<!-- Pesan Field -->
<div class="form-group">
    {!! Form::label('pesan', 'Pesan:') !!}
    {!! $donasi->pesan !!}
</div>

<!-- Transfer Bank Field -->
<div class="form-group">
    {!! Form::label('transfer_bank', 'Transfer Bank:') !!}
    {!! $donasi->transfer_bank !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! $donasi->status !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $donasi->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $donasi->updated_at !!}
</div>
