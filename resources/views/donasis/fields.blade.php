<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! Form::text('no_handphone', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 081290351971']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Contoh : muhazharrasyad@gmail.com']) !!}
</div>

<!-- Dkm Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dkm_id', 'Email Dewan Kemakmuran Masjid:') !!}
    {!! Form::select('dkm_id', $dkm, null, ['class' => 'form-control']) !!}
</div>

<!-- Nominal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nominal', 'Nominal:') !!}
    {!! Form::number('nominal', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 100000']) !!}
</div>

<!-- Pesan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pesan', 'Pesan:') !!}
    {!! Form::textarea('pesan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Semangat']) !!}
</div>

<!-- Transfer Bank Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transfer_bank', 'Transfer Bank:') !!}
    {!! Form::select('transfer_bank', ['BCA' => 'BCA', 'BRI' => 'BRI', 'BNI' => 'BNI', 'Mandiri' => 'Mandiri'], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Pending' => 'Pending', 'Selesai' => 'Selesai'], null, ['class' => 'form-control']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('url', 'URL:') !!}
    {!! Form::text('url', $donasi+1, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Daftar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ url('/') }}" class="btn btn-default">Batal</a>
</div>
