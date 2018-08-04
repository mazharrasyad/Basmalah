<script>
function myFunction() {
    input1 = document.getElementById("pengangguran_id").value;
    input2 = document.getElementById("belajar_id").value;
    input3 = input1 + input2;
    document.getElementById("kode").value = input3;
}
</script>

<!-- Pengangguran Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('pengangguran_id', 'Kode Pengangguran:'); ?>

    <?php echo Form::select('pengangguran_id', $pengangguran, null, ['class' => 'form-control', 'id' => 'pengangguran_id']); ?>

</div>

<!-- Belajar Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('belajar_id', 'Kode Belajar:'); ?>

    <?php echo Form::select('belajar_id', $belajar, null, ['class' => 'form-control', 'id' => 'belajar_id']); ?>

</div>

<!-- Jadwal Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('jadwal', 'Jadwal:'); ?>

    <?php echo Form::text('jadwal', null, ['class' => 'form-control', 'id' => 'kode']); ?>

</div>

<!-- User Id Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('user_id', 'User Id:'); ?>

    <?php echo Form::text('user_id', Auth::user()->id, ['class' => 'form-control']); ?>

</div>

<!-- URL Field -->
<div class="form-group col-sm-6" hidden>
    <?php echo Form::label('url', 'URL:'); ?>

    <?php echo Form::text('url', $jadwal+1, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <input type = 'checkbox' onclick = 'myFunction()' required> Apakah Kode Pengangguran Sudah Benar ?</input><br>
    <input type = 'checkbox' required> Apakah Kode Belajar Sudah Benar ?</input><br><br>
    <?php echo Form::submit('Daftar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('jadwals.index'); ?>" class="btn btn-default">Batal</a>
</div>
