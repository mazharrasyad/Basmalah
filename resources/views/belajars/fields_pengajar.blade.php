<!-- Kode Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', $belajar->kode, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Pelajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelajaran', 'Pelajaran:') !!}
    {!! Form::text('pelajaran', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Memasak Makanan Tradisional']) !!}
</div>

<!-- Alamat Tempat Belajar Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat_tempat_belajar', 'Alamat Tempat Belajar:') !!}
    {!! Form::textarea('alamat_tempat_belajar', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Perumahan Persada Alam Blok B1 No 18, Pondok Rajeg, Cibinong, Jawa Barat, 16914']) !!}
</div>

<!-- Hari Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hari', 'Hari:') !!}
    {!! Form::select('hari', ['Senin' => 'Senin', 'Selasa' => 'Selasa', 'Rabu' => 'Rabu', 'Kamis' => 'Kamis', 'Jumat' => 'Jumat', 'Sabtu' => 'Sabtu', 'Ahad' => 'Ahad'], null, ['class' => 'form-control']) !!}
</div>

<!-- Pukul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pukul', 'Pukul:') !!}
    {!! Form::select('pukul', ['07.00 - 09.00' => '07.00 - 09.00', '09.00 - 11.00' => '09.00 - 11.00', '12.30 - 14.30' => '12.30 - 14.30', '15.30 - 17.30' => '15.30 - 17.30'], null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Pending' => 'Pending', 'Aktif' => 'Aktif', 'Selesai' => 'Selesai'], null, ['class' => 'form-control']) !!}
</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('url', 'URL:') !!}
    {!! Form::text('url', $belajar->url, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('belajars.index') !!}" class="btn btn-default">Batal</a>
</div>
