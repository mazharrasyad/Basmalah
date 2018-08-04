<table class="table table-responsive" id="laporans-table">
    <thead>
        <tr>
            <th>No Handphone</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $laporans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $laporan->no_handphone; ?></td>
            <td>
              <?php if($laporan->status == "Pending"): ?>
                <font color="green">
              <?php else: ?>
                <font color="blue">
              <?php endif; ?>
              <b><?php echo $laporan->status; ?></b>
            </td>
            <td>
                <?php echo Form::open(['route' => ['laporans.destroy', $laporan->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('laporans.show', [$laporan->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('laporans.edit', [$laporan->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
