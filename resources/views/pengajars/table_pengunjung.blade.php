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
    @foreach($pengajars as $pengajar)
      @if($pengajar->status == 'Disetujui')
        <tr>
            <td>{!! $pengajar->nama_lengkap !!}</td>
            <td>{!! $pengajar->no_handphone !!}</td>
            <td>{!! $pengajar->email !!}</td>
            <td>{!! $pengajar->bidang_keahlian !!}</td>
            <td><a href="{!! route('pengajars.show', [$pengajar->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
      @endif
    @endforeach
    </tbody>
</table>
<br><br>
<div class="form-group col-sm-12">
    <a href="{{ url('/') }}" class="btn btn-default">Kembali</a>
</div>
