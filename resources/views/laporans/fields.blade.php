<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! Form::text('no_handphone', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 081290351971']) !!}
</div>

<!-- Pesan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pesan', 'Pesan:') !!}
    {!! Form::textarea('pesan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Saya ingin melaporkan bahwa alamat Masjid Al Huda daerah depok kurang tepat. Alamat yang tepatnya yaitu : "Jalan Tole Iskandar No.3, Mekar Jaya, Sukmajaya, Mekar Jaya, Sukmajaya, Kota Depok, Jawa Barat 16412". Mungkin itu saja, tolong untuk ditindak lanjuti.']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', $laporan+1, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Lapor', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('/') }}" class="btn btn-default">Batal</a>
</div>
