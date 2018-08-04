<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Muhammad Azhar Rasyad']) !!}
</div>

<!-- Agama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agama', 'Agama:') !!}
    {!! Form::select('agama', ['Islam' => 'Islam', 'Nasrani' => 'Nasrani', 'Yahudi' => 'Yahudi', 'Lainnya' => 'Lainnya'], null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <label class="radio-inline">
        {!! Form::radio('jenis_kelamin', "Pria", null) !!} Pria
    </label>

    <label class="radio-inline">
        {!! Form::radio('jenis_kelamin', "Wanita", null) !!} Wanita
    </label>
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

<!-- Bidang Keahlian Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bidang_keahlian', 'Bidang Keahlian:') !!}
    {!! Form::text('bidang_keahlian', null, ['class' => 'form-control', 'placeholder' => 'Contoh : Memasak']) !!}
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
    <a href="{!! route('pengajars.index') !!}" class="btn btn-default">Batal</a>
</div>
