<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Muhammad Azhar Rasyad']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Perumahan Persada Alam Blok B1 No 18, Pondok Rajeg, Cibinong, Jawa Barat, 16914']) !!}
</div>

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

<!-- Nama Masjid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_masjid', 'Nama Masjid:') !!}
    {!! Form::text('nama_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Masjid Al Muhajirin']) !!}
</div>

<!-- Alamat Masjid Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat_masjid', 'Alamat Masjid:') !!}
    {!! Form::textarea('alamat_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Jl. Bulakrata, Cibinong, Pd. Rajeg, Bogor, Jawa Barat 16914']) !!}
</div>

<!-- Jabatan Di Masjid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan_di_masjid', 'Jabatan Di Masjid:') !!}
    {!! Form::text('jabatan_di_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Ketua Dewan Kemakmuran Masjid']) !!}
</div>

<!-- No Rekening Masjid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_rekening_masjid', 'No Rekening Masjid:') !!}
    {!! Form::text('no_rekening_masjid', null, ['class' => 'form-control', 'placeholder' => 'Contoh : 1330014415715']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Pending' => 'Pending', 'Disetujui' => 'Disetujui', 'Ditolak' => 'Ditolak'], null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User:') !!}
    {!! Form::select('user_id', $user, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dkms.index') !!}" class="btn btn-default">Batal</a>
</div>
