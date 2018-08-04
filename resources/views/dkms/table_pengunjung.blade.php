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
    @foreach($dkms as $dkm)
      @if($dkm->status == 'Disetujui')
        <tr>
            <td>{!! $dkm->nama_lengkap !!}</td>
            <td>{!! $dkm->no_handphone !!}</td>
            <td>{!! $dkm->nama_masjid !!}</td>
            <td>{!! $dkm->jabatan_di_masjid !!}</td>
            <td><a href="{!! route('dkms.show', [$dkm->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
      @endif
    @endforeach
    </tbody>
</table>
<br><br>
<div class="form-group col-sm-12">
    <a href="{{ url('/') }}" class="btn btn-default">Kembali</a>
</div>
