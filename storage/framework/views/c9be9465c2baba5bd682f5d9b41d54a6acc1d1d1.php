<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <?php echo $laporan->id; ?>

</div>

<!-- No Handphone Field -->
<div class="form-group">
    <?php echo Form::label('no_handphone', 'No Handphone:'); ?>

    <?php echo $laporan->no_handphone; ?>

</div>

<!-- Pesan Field -->
<div class="form-group">
    <?php echo Form::label('pesan', 'Pesan:'); ?>

    <?php echo $laporan->pesan; ?>

</div>

<!-- Status Field -->
<div class="form-group">
    <?php echo Form::label('status', 'Status:'); ?>

    <?php echo $laporan->status; ?>

</div>

<!-- Url Field -->
<div class="form-group" hidden>
    <?php echo Form::label('url', 'Url:'); ?>

    <?php echo $laporan->url; ?>

</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <?php echo $laporan->created_at; ?>

</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <?php echo $laporan->updated_at; ?>

</div>
