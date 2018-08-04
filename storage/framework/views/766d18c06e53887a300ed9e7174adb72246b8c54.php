<!-- Role Id Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('role_id', 'Role Id:'); ?>

    <?php echo Form::select('role_id', $role, null, ['class' => 'form-control']); ?>

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password', 'Password:'); ?>

    <?php echo Form::password('password', ['class' => 'form-control']); ?>

</div>

<!-- Password Confirmation Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('password_confirmation', 'Confirm Password:'); ?>

    <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Daftar', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('penggunas.index'); ?>" class="btn btn-default">Batal</a>
</div>
