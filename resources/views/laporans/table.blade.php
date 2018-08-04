<table class="table table-responsive" id="laporans-table">
    <thead>
        <tr>
            <th>No Handphone</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($laporans as $laporan)
        <tr>
            <td>{!! $laporan->no_handphone !!}</td>
            <td>
              @if($laporan->status == "Pending")
                <font color="green">
              @else
                <font color="blue">
              @endif
              <b>{!! $laporan->status !!}</b>
            </td>
            <td>
                <div class='btn-group'>
                    <a href="{!! route('laporans.show', [$laporan->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('laporans.edit', [$laporan->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
