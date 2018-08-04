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
    @foreach($jadwals as $jadwal)
        @if(Auth::user()->id == $jadwal->user_id)
        <tr>
            <td>{!! $jadwal->penganggurans['kode'] !!}</td>
            <td>{!! $jadwal->belajars['kode'] !!}</td>
            <td>
              @if($jadwal->status == "Menunggu")
                <font color="green">
              @elseif($jadwal->status == "Diterima")
                <font color="blue">
              @else
                <font color="red">
              @endif
              <b>{!! $jadwal->status !!}</b>
            </td>
            <td><a href="{!! route('jadwals.show', [$jadwal->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
        </tr>
        @endif
    @endforeach
    </tbody>
</table>
