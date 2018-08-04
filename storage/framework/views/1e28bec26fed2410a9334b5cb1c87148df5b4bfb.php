<style>

table#dkms-table tr:nth-child(even) {
    background-color: #eee;
}
table#dkms-table tr:nth-child(odd) {
    background-color: #fff;
}
table#dkms-table th {
    color: white;
    background-color: black;
    text-align: center;
}
td {
  text-align: center;
}

</style>

<table class="table table-responsive" id="dkms-table">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>No Handphone</th>
            <th>Nama Masjid</th>
            <th>Jabatan Di Masjid</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $dkms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dkm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($dkm->status == 'Disetujui'): ?>
        <tr>
            <td><?php echo $dkm->nama_lengkap; ?></td>
            <td><?php echo $dkm->no_handphone; ?></td>
            <td><?php echo $dkm->nama_masjid; ?></td>
            <td><?php echo $dkm->jabatan_di_masjid; ?></td>
            <td><a href="<?php echo route('dkms.show', [$dkm->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<br><br>
<div class="form-group col-sm-12">
    <a href="<?php echo e(url('/')); ?>" class="btn btn-default">Kembali</a>
</div>
