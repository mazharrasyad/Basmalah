<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Pending' => 'Pending', 'Selesai' => 'Selesai', 'Gagal' => 'Gagal'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('donasis.index') !!}" class="btn btn-default">Batal</a>
</div>
