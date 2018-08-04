<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $pengguna->id !!}
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Role:') !!}
    {!! $pengguna->role['name'] !!}
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! $pengguna->name !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $pengguna->email !!}
</div>

<!-- Hint Password Field -->
<div class="form-group">
    {!! Form::label('hint_password', 'Hint Password:') !!}
    {!! $pengguna->hint_password !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $pengguna->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $pengguna->updated_at !!}
</div>
