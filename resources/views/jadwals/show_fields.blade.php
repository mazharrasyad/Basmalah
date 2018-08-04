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
    {!! Form::label('id', 'Id:') !!}
    {!! $jadwal->id !!}
</div>

<!-- Pengangguran Id Field -->
<div class="form-group">
    {!! Form::label('pengangguran_id', 'Kode Pengangguran:') !!}
    @foreach($penganggurans as $pengangguran)
    @if($jadwal->pengangguran_id == $pengangguran->id)
    {!! $pengangguran->kode !!}
    <a class='btn btn-default btn-xs' id="tombol_pengangguran"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_pengangguran" hidden>
    {!! Form::label('pengangguran_id', 'Nama Lengkap:') !!} {!! $pengangguran->nama_lengkap !!} <br>
    {!! Form::label('pengangguran_id', 'Agama:') !!} {!! $pengangguran->agama !!} <br>
    {!! Form::label('pengangguran_id', 'Jenis Kelamin:') !!} {!! $pengangguran->jenis_kelamin !!} <br>
    {!! Form::label('pengangguran_id', 'Alamat:') !!} {!! $pengangguran->alamat !!} <br>
    {!! Form::label('pengangguran_id', 'Pendidikan Terakhir:') !!} {!! $pengangguran->pendidikan_terakhir !!} <br>
    {!! Form::label('pengangguran_id', 'Peminatan:') !!} {!! $pengangguran->peminatan !!} <br>
    </p>
    @endif
    @endforeach
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

<!-- Belajar Id Field -->
<div class="form-group">
    {!! Form::label('belajar_id', 'Kode Belajar:') !!}
    @foreach($belajars as $belajar)
    @if($jadwal->belajar_id == $belajar->id)
    {!! $belajar->kode !!}
    <a class='btn btn-default btn-xs' id="tombol_belajar"><i class="glyphicon glyphicon-eye-open"></i></a>
    <p id="isi_belajar" hidden>
    {!! Form::label('belajar_id', 'Pelajaran:') !!} {!! $belajar->pelajaran !!} <br>
    {!! Form::label('belajar_id', 'Alamat Tempat belajar:') !!} {!! $belajar->alamat_tempat_belajar !!} <br>
    {!! Form::label('belajar_id', 'Hari:') !!} {!! $belajar->hari !!} <br>
    {!! Form::label('belajar_id', 'Pukul:') !!} {!! $belajar->pukul !!} <br>
    </p>
    @endif
    @endforeach
</div>

<!-- Pengajar Id Field -->
<div class="form-group">
  {!! Form::label('pengajar_id', 'Pengajar:') !!}
  @foreach($pengajars as $pengajar)
  @if($belajar->user_id == $pengajar->user_id)
  {!! $pengajar->nama_lengkap !!}
  <a class='btn btn-default btn-xs' id="tombol_pengajar"><i class="glyphicon glyphicon-eye-open"></i></a>
  <p id="isi_pengajar" hidden>
  {!! Form::label('pengajar_id', 'Agama:') !!} {!! $pengajar->agama !!} <br>
  {!! Form::label('pengajar_id', 'Jenis Kelamin:') !!} {!! $pengajar->jenis_kelamin !!} <br>
  {!! Form::label('pengajar_id', 'Alamat:') !!} {!! $pengajar->alamat !!} <br>
  {!! Form::label('pengajar_id', 'No Handphone:') !!} {!! $pengajar->no_handphone !!} <br>
  {!! Form::label('pengajar_id', 'Email:') !!} {!! $pengajar->email !!} <br>
  {!! Form::label('pengajar_id', 'Bidang Keahlian:') !!} {!! $pengajar->bidang_keahlian !!} <br>
  </p>
  @endif
  @endforeach
</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $jadwal->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $jadwal->updated_at !!}
</div>
