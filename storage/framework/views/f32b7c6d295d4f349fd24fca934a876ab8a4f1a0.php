<?php if(Auth::user()->role_id == 1): ?>
<table class="table table-responsive" id="pengajars-table">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
        <th>No Handphone</th>
        <th>Email</th>
        <th>Bidang Keahlian</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pengajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $pengajar->nama_lengkap; ?></td>
            <td><?php echo $pengajar->no_handphone; ?></td>
            <td><?php echo $pengajar->email; ?></td>
            <td><?php echo $pengajar->bidang_keahlian; ?></td>
            <td>
              <?php if($pengajar->status == "Pending"): ?>
                <font color="green">
              <?php elseif($pengajar->status == "Disetujui"): ?>
                <font color="blue">
              <?php else: ?>
                <font color="red">
              <?php endif; ?>
              <b><?php echo $pengajar->status; ?></b>
            </td>
            <td>
                <?php echo Form::open(['route' => ['pengajars.destroy', $pengajar->id], 'method' => 'delete']); ?>

                <div class='btn-group'>
                    <a href="<?php echo route('pengajars.show', [$pengajar->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('pengajars.edit', [$pengajar->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
