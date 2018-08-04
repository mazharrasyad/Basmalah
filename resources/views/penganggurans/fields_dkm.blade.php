<!-- Kode Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', $pengangguran->kode, ['class' => 'form-control']) !!}
</div>

<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Muhammad Azhar Rasyad']) !!}
</div>

<!-- Agama Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('agama', 'Agama:') !!}
    {!! Form::select('agama', ['Islam' => 'Islam', 'Nasrani' => 'Nasrani', 'Yahudi' => 'Yahudi', 'Lainnya' => 'Lainnya'], null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-12" hidden>
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <label class="radio-inline">
        {!! Form::radio('jenis_kelamin', "Pria", null) !!} Pria
    </label>

    <label class="radio-inline">
        {!! Form::radio('jenis_kelamin', "Wanita", null) !!} Wanita
    </label>

</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12" hidden>
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Perumahan Persada Alam Blok B1 No 18, Pondok Rajeg, Cibinong, Jawa Barat, 16914']) !!}
</div>

<!-- Pendidikan Terakhir Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('pendidikan_terakhir', 'Pendidikan Terakhir:') !!}
    {!! Form::select('pendidikan_terakhir', ['Tidak Sekolah' => 'Tidak Sekolah', 'Taman Kanak-Kanak atau Setingkat' => 'Taman Kanak-Kanak atau Setingkat', 'Sekolah Dasar atau Setingkat' => 'Sekolah Dasar atau Setingkat', 'Sekolah Menengah Pertama atau Setingkat' => 'Sekolah Menengah Pertama atau Setingkat', 'Sekolah Menengah Atas atau Setingkat' => 'Sekolah Menengah Atas atau Setingkat'], null, ['class' => 'form-control']) !!}
</div>

<!-- Peminatan Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('peminatan', 'Peminatan:') !!}
    {!! Form::text('peminatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Berternak']) !!}
</div>

<!-- Lama Menganggur Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('lama_menganggur', 'Lama Menganggur:') !!}
    {!! Form::select('lama_menganggur', ['Kurang Dari 1 Bulan' => 'Kurang Dari 1 Bulan', 'Antara 1 - 12 Bulan' => 'Antara 1 - 12 Bulan', 'Lebih Dari 12 Bulan' => 'Lebih Dari 12 Bulan'], null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Orang Tanggungan Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('jumlah_orang_tanggungan', 'Jumlah Orang Tanggungan:') !!}
    {!! Form::number('jumlah_orang_tanggungan', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 2']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Menganggur' => 'Menganggur', 'Belajar' => 'Belajar', 'Bekerja' => 'Bekerja'], null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6" hidden>
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', Auth::user()->id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('penganggurans.index') !!}" class="btn btn-default">Cancel</a>
</div>
