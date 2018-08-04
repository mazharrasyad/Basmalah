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

<!-- Hint Password Field -->
<div class="form-group col-sm-6" disabled>
    <?php echo Form::label('hint_password', 'Hint Password:'); ?>

    <?php echo Form::text('hint_password', null, ['class' => 'form-control', 'disabled' => 'disabled']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('penggunas.index'); ?>" class="btn btn-default">Batal</a>
</div>
