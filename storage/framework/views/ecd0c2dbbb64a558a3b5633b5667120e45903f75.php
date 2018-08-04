<?php if(Auth::user()->role_id == 1): ?>
<li class="<?php echo e(Request::is('penggunas*') ? 'active' : ''); ?>">
    <a href="<?php echo route('penggunas.index'); ?>"><i class="fa fa-edit"></i><span>Data User</span></a>
</li>

<li class="<?php echo e(Request::is('dkms*') ? 'active' : ''); ?>">
    <a href="<?php echo route('dkms.index'); ?>"><i class="fa fa-edit"></i><span>Data DKM</span></a>
</li>

<li class="<?php echo e(Request::is('pengajars*') ? 'active' : ''); ?>">
    <a href="<?php echo route('pengajars.index'); ?>"><i class="fa fa-edit"></i><span>Data Pengajar</span></a>
</li>

<li class="<?php echo e(Request::is('penganggurans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('penganggurans.index'); ?>"><i class="fa fa-edit"></i><span>Data Pengangguran</span></a>
</li>

<li class="<?php echo e(Request::is('belajars*') ? 'active' : ''); ?>">
    <a href="<?php echo route('belajars.index'); ?>"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="<?php echo e(Request::is('donasis*') ? 'active' : ''); ?>">
    <a href="<?php echo route('donasis.index'); ?>"><i class="fa fa-edit"></i><span>Data Donasi</span></a>
</li>

<li class="<?php echo e(Request::is('laporans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('laporans.index'); ?>"><i class="fa fa-edit"></i><span>Data Laporan</span></a>
</li>

<?php elseif(Auth::user()->role_id == 2): ?>

<li class="<?php echo e(Request::is('penganggurans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('penganggurans.index'); ?>"><i class="fa fa-edit"></i><span>Data Pengangguran</span></a>
</li>

<li class="<?php echo e(Request::is('belajars*') ? 'active' : ''); ?>">
    <a href="<?php echo route('belajars.index'); ?>"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="<?php echo e(Request::is('jadwals*') ? 'active' : ''); ?>">
    <a href="<?php echo route('jadwals.index'); ?>"><i class="fa fa-edit"></i><span>Data Jadwal</span></a>
</li>

<li class="<?php echo e(Request::is('penganggurans*') ? 'active' : ''); ?>">
    <a href="<?php echo route('penganggurans.create'); ?>"><i class="fa fa-edit"></i><span>Daftar Pengangguran</span></a>
</li>

<li class="<?php echo e(Request::is('jadwals*') ? 'active' : ''); ?>">
    <a href="<?php echo route('jadwals.create'); ?>"><i class="fa fa-edit"></i><span>Daftar Jadwal</span></a>
</li>

<?php elseif(Auth::user()->role_id == 3): ?>

<li class="<?php echo e(Request::is('belajars*') ? 'active' : ''); ?>">
    <a href="<?php echo route('belajars.index'); ?>"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="<?php echo e(Request::is('jadwals*') ? 'active' : ''); ?>">
    <a href="<?php echo route('jadwals.index'); ?>"><i class="fa fa-edit"></i><span>Data Jadwal</span></a>
</li>

<li class="<?php echo e(Request::is('belajars*') ? 'active' : ''); ?>">
    <a href="<?php echo route('belajars.create'); ?>"><i class="fa fa-edit"></i><span>Daftar Belajar</span></a>
</li>

<?php else: ?>

<? return redirect(url('/')); ?>

<?php endif; ?>
