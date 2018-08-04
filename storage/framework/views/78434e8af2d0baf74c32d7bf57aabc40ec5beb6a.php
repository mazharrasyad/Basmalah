<table class="table table-responsive" id="penggunas-table">
    <thead>
        <tr>
          <th>Id</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $penggunas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengguna): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $pengguna->id; ?></td>
            <td><?php echo $pengguna->role['name']; ?></td>
            <td><?php echo $pengguna->name; ?></td>
            <td><?php echo $pengguna->email; ?></td>
            <td>
                <?php echo Form::open(['route' => ['penggunas.destroy', $pengguna->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('penggunas.show', [$pengguna->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('penggunas.edit', [$pengguna->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
