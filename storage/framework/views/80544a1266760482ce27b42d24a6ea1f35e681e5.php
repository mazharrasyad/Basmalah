<!-- Status Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo Form::select('status', ['Pending' => 'Pending', 'Selesai' => 'Selesai', 'Gagal' => 'Gagal'], null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('donasis.index'); ?>" class="btn btn-default">Batal</a>
</div>
