<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    {!! $laporan->id !!}
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('no_handphone', 'No Handphone:') !!}
    {!! $laporan->no_handphone !!}
</div>

<!-- Pesan Field -->
<div class="form-group">
    {!! Form::label('pesan', 'Pesan:') !!}
    {!! $laporan->pesan !!}
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    {!! $laporan->status !!}
</div>

<!-- Url Field -->
<div class="form-group" hidden>
    {!! Form::label('url', 'Url:') !!}
    {!! $laporan->url !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $laporan->created_at !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $laporan->updated_at !!}
</div>
