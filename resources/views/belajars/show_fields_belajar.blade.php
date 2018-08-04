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
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $belajar->id !!}</p>
</div>

<!-- Kode Field -->
<div class="form-group">
    {!! Form::label('kode', 'Kode Belajar:') !!}
    {!! $belajar->kode !!}
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

<!-- Pelajaran Field -->
<div class="form-group">
    {!! Form::label('pelajaran', 'Pelajaran:') !!}
    {!! $belajar->pelajaran !!}
</div>

<!-- Alamat Tempat Belajar Field -->
<div class="form-group">
    {!! Form::label('alamat_tempat_belajar', 'Alamat Tempat Belajar:') !!}
    {!! $belajar->alamat_tempat_belajar !!}
</div>

<!-- Hari Field -->
<div class="form-group">
    {!! Form::label('hari', 'Hari:') !!}
    {!! $belajar->hari !!}
</div>

<!-- Pukul Field -->
<div class="form-group">
    {!! Form::label('pukul', 'Pukul:') !!}
    {!! $belajar->pukul !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! $belajar->status !!}
</div>

<!-- Created At Field -->
<div class="form-group" hidden>
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $belajar->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" hidden>
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $belajar->updated_at !!}</p>
</div>

</body>
</html>
