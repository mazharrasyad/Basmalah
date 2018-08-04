<table class="table table-responsive" id="penganggurans-table">
    <thead>
        <tr>
        <th>Kode</th>
        <th>Nama Lengkap</th>
        <th>Peminatan</th>
        <th>Status</th>
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $penganggurans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengangguran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(Auth::user()->id == $pengangguran->user_id): ?>
        <tr>
            <td><?php echo $pengangguran->kode; ?></td>
            <td><?php echo $pengangguran->nama_lengkap; ?></td>
            <td><?php echo $pengangguran->peminatan; ?></td>
            <td><?php echo $pengangguran->status; ?></td>
            <td>
                <?php echo Form::open(['route' => ['penganggurans.destroy', $pengangguran->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('penganggurans.show', [$pengangguran->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('penganggurans.edit', [$pengangguran->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
