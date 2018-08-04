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
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pengangguran->id !!}</p>
</div>

<!-- Kode Field -->
<div class="form-group">
    {!! Form::label('kode', 'Kode:') !!}
    {!! $pengangguran->kode !!}
</div>

<!-- DKM Id Field -->
<div class="form-group">
    {!! Form::label('dkm_id', 'DKM:') !!}
    @foreach($dkms as $dkm)
    @if($pengangguran->user_id == $dkm->user_id)
    {!! $dkm->nama_lengkap !!}
    <a class='btn btn-default btn-xs' id="tombol_dkm"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_dkm" hidden>
    {!! Form::label('dkm_id', 'Alamat:') !!} {!! $dkm->alamat !!} <br>
    {!! Form::label('dkm_id', 'No Handphone:') !!} {!! $dkm->no_handphone !!} <br>
    {!! Form::label('dkm_id', 'Email:') !!} {!! $dkm->email !!} <br>
    {!! Form::label('dkm_id', 'Nama Masjid:') !!} {!! $dkm->nama_masjid !!} <br>
    {!! Form::label('dkm_id', 'Alamat Masjid:') !!} {!! $dkm->alamat_masjid !!} <br>
    {!! Form::label('dkm_id', 'Jabatan di Masjid:') !!} {!! $dkm->jabatan_di_masjid !!} <br>
    {!! Form::label('dkm_id', 'No Rekening Masjid:') !!} {!! $dkm->no_rekening_masjid !!} <br>
    </p>
    @endif
    @endforeach
</div>

<!-- Nama Lengkap Field -->
<div class="form-group">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! $pengangguran->nama_lengkap !!}
</div>

<!-- Agama Field -->
<div class="form-group">
    {!! Form::label('agama', 'Agama:') !!}
    {!! $pengangguran->agama !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! $pengangguran->jenis_kelamin !!}
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! $pengangguran->alamat !!}
</div>

<!-- Pendidikan Terakhir Field -->
<div class="form-group">
    {!! Form::label('pendidikan_terakhir', 'Pendidikan Terakhir:') !!}
    {!! $pengangguran->pendidikan_terakhir !!}
</div>

<!-- Peminatan Field -->
<div class="form-group">
    {!! Form::label('peminatan', 'Peminatan:') !!}
    {!! $pengangguran->peminatan !!}
</div>

<!-- Lama Menganggur Field -->
<div class="form-group">
    {!! Form::label('lama_menganggur', 'Lama Menganggur:') !!}
    {!! $pengangguran->lama_menganggur !!}
</div>

<!-- Jumlah Orang Tanggungan Field -->
<div class="form-group">
    {!! Form::label('jumlah_orang_tanggungan', 'Jumlah Orang Tanggungan:') !!}
    {!! $pengangguran->jumlah_orang_tanggungan !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! $pengangguran->status !!}
</div>

<!-- User Id Field -->
<div class="form-group" hidden>
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $pengangguran->user_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pengangguran->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pengangguran->updated_at !!}</p>
</div>

<!-- Jadwal Field -->
<div class="form-group">
    {!! Form::label('mengikuti', 'Mengikuti:') !!}
    <a class='btn btn-default btn-xs' id="tombol_jadwal"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_jadwal" hidden>
      <text hidden>{!! $i = 1 !!}</text>
      @foreach($jadwals as $jadwal)
        @if($dkm->user_id == $jadwal->user_id)
          &emsp;&emsp;
          <b>{!! $i !!}. </b>
          Kode Belajar {!! $jadwal->belajars['kode'] !!} =>
          Status :
            @if($jadwal->status == "Menganggur")
              <font color="green">
            @elseif($jadwal->status == "Diterima")
              <font color="blue">
            @else
              <font color="red">
            @endif
          <b>{!! $jadwal->status !!}</b> </font>
          <br>
          <text hidden>{!! $i++ !!}</text>
        @endif
      @endforeach
    </p>
</div>
