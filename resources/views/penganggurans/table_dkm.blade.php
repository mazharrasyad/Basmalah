<table class="table table-responsive" id="penganggurans-table">
    <thead>
        <tr>
            <th>Kode</th>
        <th>Nama Lengkap</th>
        <th>Pendidikan Terakhir</th>
        <th>Peminatan</th>
        <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penganggurans as $pengangguran)
      @if(Auth::user()->id == $pengangguran->user_id)
        @foreach($dkms as $dkm)
          @if(Auth::user()->id == $dkm->user_id)
        <tr>
            <td>{!! $pengangguran->kode !!}</td>
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
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
          @endif
        @endforeach
      @endif
    @endforeach
    </tbody>
</table>
