<?php if(Auth::user()->role_id == 1): ?>
<table class="table table-responsive" id="dkms-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Lengkap</th>
            <th>No Handphone</th>
            <th>Nama Masjid</th>
            <th>No Rekening Masjid</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $dkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $dkm->id; ?></td>
            <td><?php echo $dkm->nama_lengkap; ?></td>
            <td><?php echo $dkm->no_handphone; ?></td>
            <td><?php echo $dkm->nama_masjid; ?></td>
            <td><?php echo $dkm->no_rekening_masjid; ?></td>
            <td>
              <?php if($dkm->status == "Pending"): ?>
                <font color="green">
              <?php elseif($dkm->status == "Disetujui"): ?>
                <font color="blue">
              <?php else: ?>
                <font color="red">
              <?php endif; ?>
              <b><?php echo $dkm->status; ?></b>
            </td>
            <td>
                <?php echo Form::open(['route' => ['dkms.destroy', $dkm->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('dkms.show', [$dkm->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('dkms.edit', [$dkm->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                </div>
                <?php echo Form::close(); ?>

            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php else: ?>
<?php echo $__env->make('home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
