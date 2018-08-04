<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Menunggu' => 'Menunggu', 'Diterima' => 'Diterima', 'Ditolak' => 'Ditolak'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jadwals.index') !!}" class="btn btn-default">Cancel</a>
</div>
