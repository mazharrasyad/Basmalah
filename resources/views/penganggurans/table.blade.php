<table class="table table-responsive" id="penganggurans-table">
    <thead>
        <tr>
            <th>Kode</th>
        <th>DKM</th>
        <th>Nama Lengkap</th>
        <th>Pendidikan Terakhir</th>
        <th>Peminatan</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penganggurans as $pengangguran)
      @foreach($dkms as $dkm)
        @if($pengangguran->user_id == $dkm->user_id)
        <tr>
            <td>{!! $pengangguran->kode !!}</td>
            <td>{!! $dkm->nama_lengkap !!}</td>
            <td>{!! $pengangguran->nama_lengkap !!}</td>
            <td>{!! $pengangguran->pendidikan_terakhir !!}</td>
            <td>{!! $pengangguran->peminatan !!}</td>
            <td>
              @if($pengangguran->status == "Menganggur")
                <font color="green">
              @elseif($pengangguran->status == "Belajar")
                <font color="blue">
              @else
                <font color="red">
              @endif
              <b>{!! $pengangguran->status !!}</b>
            </td>
            <td>
                {!! Form::open(['route' => ['penganggurans.destroy', $pengangguran->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('penganggurans.show', [$pengangguran->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('penganggurans.edit', [$pengangguran->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
        @endif
      @endforeach
    @endforeach
    </tbody>
</table>
