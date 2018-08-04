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
    {!! $pengajar->nama_lengkap !!}
</div>

<!-- Agama Field -->
<div class="form-group">
    {!! Form::label('agama', 'Agama:') !!}
    {!! $pengajar->agama !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! $pengajar->jenis_kelamin !!}
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! $pengajar->alamat !!}
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! $pengajar->no_handphone !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $pengajar->email !!}
</div>

<!-- Bidang Keahlian Field -->
<div class="form-group">
    {!! Form::label('bidang_keahlian', 'Bidang Keahlian:') !!}
    {!! $pengajar->bidang_keahlian !!}
</div>

<!-- Belajar Id Field -->
<div class="form-group">
    {!! Form::label('mengajar', 'Mengajar:') !!}
    <a class='btn btn-default btn-xs' id="tombol"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi" hidden>
      <text hidden>{!! $i = 1 !!}</text>
      @foreach($belajars as $belajar)
        @if($pengajar->user_id == $belajar->user_id)
          &emsp;&emsp;
          <b>{!! $i !!}.
          {!! $belajar->pelajaran !!} </b>
          [Kode {!! $belajar->kode !!}] =>
          Status :
            @if($belajar->status == "Pending")
              <font color="green">
            @elseif($belajar->status == "Aktif")
              <font color="blue">
            @else
              <font color="red">
            @endif
          <b>{!! $belajar->status !!}</b> </font>
          <br>
          <text hidden>{!! $i++ !!}</text>
        @endif
      @endforeach
    </p>
</div>
