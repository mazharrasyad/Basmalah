<table class="table table-responsive" id="belajars-table">
    <thead>
        <tr>
        <th>Kode</th>
        <th>Pengajar</th>
        <th>Pelajaran</th>
        <th>Hari</th>
        <th>Pukul</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $belajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $belajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if(Auth::user()->id == $belajar->user_id): ?>
      <?php $__currentLoopData = $pengajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($belajar->user_id == $pengajar->user_id): ?>
        <tr>
            <td><?php echo $belajar->kode; ?></td>
            <td><?php echo $pengajar->nama_lengkap; ?></td>
            <td><?php echo $belajar->pelajaran; ?></td>
            <td><?php echo $belajar->hari; ?></td>
            <td><?php echo $belajar->pukul; ?></td>
            <td>
              <?php if($belajar->status == "Pending"): ?>
                <font color="green">
              <?php elseif($belajar->status == "Aktif"): ?>
                <font color="blue">
              <?php else: ?>
                <font color="red">
              <?php endif; ?>
              <b><?php echo $belajar->status; ?></b>
            </td>
            <td>
                <div class='btn-group'>
                    <a href="<?php echo route('belajars.show', [$belajar->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="<?php echo route('belajars.edit', [$belajar->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </td>
        </tr>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
