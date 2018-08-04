<table class="table table-responsive" id="belajars-table">
    <thead>
        <tr>
        <th>Kode Belajar</th>
        <th>Kode Pengangguran</th>
        <th>Email Pengajar</th>
        <th>Alamat Tempat Belajar</th>
        <th>Hari</th>
        <th>Pukul</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $belajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $belajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo $belajar->kode; ?></td>
            <td><?php echo $belajar->penganggurans['kode']; ?></td>
            <td><?php echo $belajar->pengajars['email']; ?></td>
            <td><?php echo $belajar->alamat_tempat_belajar; ?></td>
            <td><?php echo $belajar->hari; ?></td>
            <td><?php echo $belajar->pukul; ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
