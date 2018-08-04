@if (Auth::user()->role_id == 1)
<li class="{{ Request::is('penggunas*') ? 'active' : '' }}">
    <a href="{!! route('penggunas.index') !!}"><i class="fa fa-edit"></i><span>Data User</span></a>
</li>

<li class="{{ Request::is('dkms*') ? 'active' : '' }}">
    <a href="{!! route('dkms.index') !!}"><i class="fa fa-edit"></i><span>Data DKM</span></a>
</li>

<li class="{{ Request::is('pengajars*') ? 'active' : '' }}">
    <a href="{!! route('pengajars.index') !!}"><i class="fa fa-edit"></i><span>Data Pengajar</span></a>
</li>

<li class="{{ Request::is('penganggurans*') ? 'active' : '' }}">
    <a href="{!! route('penganggurans.index') !!}"><i class="fa fa-edit"></i><span>Data Pengangguran</span></a>
</li>

<li class="{{ Request::is('belajars*') ? 'active' : '' }}">
    <a href="{!! route('belajars.index') !!}"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="{{ Request::is('donasis*') ? 'active' : '' }}">
    <a href="{!! route('donasis.index') !!}"><i class="fa fa-edit"></i><span>Data Donasi</span></a>
</li>

<li class="{{ Request::is('laporans*') ? 'active' : '' }}">
    <a href="{!! route('laporans.index') !!}"><i class="fa fa-edit"></i><span>Data Laporan</span></a>
</li>

@elseif (Auth::user()->role_id == 2)

<li class="{{ Request::is('penganggurans*') ? 'active' : '' }}">
    <a href="{!! route('penganggurans.index') !!}"><i class="fa fa-edit"></i><span>Data Pengangguran</span></a>
</li>

<li class="{{ Request::is('belajars*') ? 'active' : '' }}">
    <a href="{!! route('belajars.index') !!}"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="{{ Request::is('jadwals*') ? 'active' : '' }}">
    <a href="{!! route('jadwals.index') !!}"><i class="fa fa-edit"></i><span>Data Jadwal</span></a>
</li>

<li class="{{ Request::is('penganggurans*') ? 'active' : '' }}">
    <a href="{!! route('penganggurans.create') !!}"><i class="fa fa-edit"></i><span>Daftar Pengangguran</span></a>
</li>

<li class="{{ Request::is('jadwals*') ? 'active' : '' }}">
    <a href="{!! route('jadwals.create') !!}"><i class="fa fa-edit"></i><span>Daftar Jadwal</span></a>
</li>

@elseif (Auth::user()->role_id == 3)

<li class="{{ Request::is('belajars*') ? 'active' : '' }}">
    <a href="{!! route('belajars.index') !!}"><i class="fa fa-edit"></i><span>Data Belajar</span></a>
</li>

<li class="{{ Request::is('jadwals*') ? 'active' : '' }}">
    <a href="{!! route('jadwals.index') !!}"><i class="fa fa-edit"></i><span>Data Jadwal</span></a>
</li>

<li class="{{ Request::is('belajars*') ? 'active' : '' }}">
    <a href="{!! route('belajars.create') !!}"><i class="fa fa-edit"></i><span>Daftar Belajar</span></a>
</li>

@else

<? return redirect(url('/')); ?>

@endif
