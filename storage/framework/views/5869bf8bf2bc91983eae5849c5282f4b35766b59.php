<table class="table table-responsive" id="donasis-table">
    <thead>
        <tr>
            <th>No Handphone</th>
            <th>Email DKM</th>
            <th>No Rekening Masjid</th>
            <th>Nominal</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $donasis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $donasi->no_handphone; ?></td>
            <td><?php echo $donasi->dkms['email']; ?></td>
            <td><?php echo $donasi->dkms['no_rekening_masjid']; ?></td>
            <td><?php echo $donasi->nominal; ?></td>
            <td>
              <?php if($donasi->status == "Pending"): ?>
                <font color="green">
              <?php elseif($donasi->status == "Selesai"): ?>
                <font color="blue">
              <?php else: ?>
                <font color="red">
              <?php endif; ?>
              <b><?php echo $donasi->status; ?></b>
            </td>
            <td>
                <?php echo Form::open(['route' => ['donasis.destroy', $donasi->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('donasis.show', [$donasi->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('donasis.edit', [$donasi->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
