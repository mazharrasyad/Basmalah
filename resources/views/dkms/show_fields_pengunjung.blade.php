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
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! $dkm->nama_lengkap !!}
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! $dkm->alamat !!}
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! $dkm->no_handphone !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $dkm->email !!}
</div>

<!-- Nama Masjid Field -->
<div class="form-group">
    {!! Form::label('nama_masjid', 'Nama Masjid:') !!}
    {!! $dkm->nama_masjid !!}
</div>

<!-- Alamat Masjid Field -->
<div class="form-group">
    {!! Form::label('alamat_masjid', 'Alamat Masjid:') !!}
    {!! $dkm->alamat_masjid !!}
</div>

<!-- Jabatan Di Masjid Field -->
<div class="form-group">
    {!! Form::label('jabatan_di_masjid', 'Jabatan Di Masjid:') !!}
    {!! $dkm->jabatan_di_masjid !!}
</div>

<!-- No Rekening Masjid Field -->
<div class="form-group">
    {!! Form::label('no_rekening_masjid', 'No Rekening Masjid:') !!}
    {!! $dkm->no_rekening_masjid !!}
</div>

<!-- Pengangguran Id Field -->
<div class="form-group">
    {!! Form::label('membina', 'Membina:') !!}
    <a class='btn btn-default btn-xs' id="tombol"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi" hidden>
      <text hidden>{!! $i = 1 !!}</text>
      @foreach($penganggurans as $pengangguran)
        @if($dkm->user_id == $pengangguran->user_id)
          &emsp;&emsp;
          <b>{!! $i !!}.
          {!! $pengangguran->nama_lengkap !!} </b>
          [Kode {!! $pengangguran->kode !!}] =>
          Status :
            @if($pengangguran->status == "Menganggur")
              <font color="green">
            @elseif($pengangguran->status == "Belajar")
              <font color="blue">
            @else
              <font color="red">
            @endif
          <b>{!! $pengangguran->status !!}</b> </font>
          <br>
          <text hidden>{!! $i++ !!}</text>
        @endif
      @endforeach
    </p>
</div>
