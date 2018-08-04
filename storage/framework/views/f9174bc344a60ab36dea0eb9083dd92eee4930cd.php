<table class="table table-responsive" id="jadwals-table">
    <thead>
        <tr>
            <th>Kode Pengangguran</th>
            <th>Kode Belajar</th>
            <th>Status</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $jadwal->penganggurans['kode']; ?></td>
            <td><?php echo $jadwal->belajars['kode']; ?></td>
            <td>
              <?php if($jadwal->status == "Menunggu"): ?>
                <font color="green">
              <?php elseif($jadwal->status == "Diterima"): ?>
                <font color="blue">
              <?php else: ?>
                <font color="red">
              <?php endif; ?>
              <b><?php echo $jadwal->status; ?></b>
            </td>
            <td><a href="<?php echo route('jadwals.show', [$jadwal->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
