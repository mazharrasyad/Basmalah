<table class="table table-responsive" id="donasis-table">
    <thead>
        <tr>
            <th>No Handphone</th>
            <th>Email DKM</th>
            <th>No Rekening Masjid</th>
            <th>Nominal</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($donasis as $donasi)
        <tr>
            <td>{!! $donasi->no_handphone !!}</td>
            <td>{!! $donasi->dkms['email'] !!}</td>
            <td>{!! $donasi->dkms['no_rekening_masjid'] !!}</td>
            <td>{!! $donasi->nominal !!}</td>
            <td>
              @if($donasi->status == "Pending")
                <font color="green">
              @elseif($donasi->status == "Selesai")
                <font color="blue">
              @else
                <font color="red">
              @endif
              <b>{!! $donasi->status !!}</b>
            </td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('donasis.show', [$donasi->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('donasis.edit', [$donasi->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
