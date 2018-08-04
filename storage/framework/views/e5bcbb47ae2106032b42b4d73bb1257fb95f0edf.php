<style>

table#pengajars-table tr:nth-child(even) {
    background-color: #eee;
}
table#pengajars-table tr:nth-child(odd) {
    background-color: #fff;
}
table#pengajars-table th {
    color: white;
    background-color: black;
    text-align: center;
}
td {
  text-align: center;
}

</style>

<table class="table table-responsive" id="pengajars-table">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
        <th>No Handphone</th>
        <th>Email</th>
        <th>Bidang Keahlian</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $pengajars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengajar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($pengajar->status == 'Disetujui'): ?>
        <tr>
            <td><?php echo $pengajar->nama_lengkap; ?></td>
            <td><?php echo $pengajar->no_handphone; ?></td>
            <td><?php echo $pengajar->email; ?></td>
            <td><?php echo $pengajar->bidang_keahlian; ?></td>
            <td><a href="<?php echo route('pengajars.show', [$pengajar->url]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
      <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<br><br>
<div class="form-group col-sm-12">
    <a href="<?php echo e(url('/')); ?>" class="btn btn-default">Kembali</a>
</div>
