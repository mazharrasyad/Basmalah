<!-- Id Field -->
<div class="form-group">
    <?php echo Form::label('id', 'Id:'); ?>

    <?php echo $pengguna->id; ?>

</div>

<!-- Role Field -->
<div class="form-group">
    <?php echo Form::label('role_id', 'Role:'); ?>

    <?php echo $pengguna->role['name']; ?>

</div>

<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <?php echo $pengguna->name; ?>

</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo $pengguna->email; ?>

</div>

<!-- Hint Password Field -->
<div class="form-group">
    <?php echo Form::label('hint_password', 'Hint Password:'); ?>

    <?php echo $pengguna->hint_password; ?>

</div>

<!-- Created At Field -->
<div class="form-group">
    <?php echo Form::label('created_at', 'Created At:'); ?>

    <?php echo $pengguna->created_at; ?>

</div>

<!-- Updated At Field -->
<div class="form-group">
    <?php echo Form::label('updated_at', 'Updated At:'); ?>

    <?php echo $pengguna->updated_at; ?>

</div>
