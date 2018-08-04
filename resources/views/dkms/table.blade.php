@if(Auth::user()->role_id == 1)
<table class="table table-responsive" id="dkms-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Lengkap</th>
            <th>No Handphone</th>
            <th>Nama Masjid</th>
            <th>No Rekening Masjid</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($dkms as $dkm)
        <tr>
            <td>{!! $dkm->id !!}</td>
            <td>{!! $dkm->nama_lengkap !!}</td>
            <td>{!! $dkm->no_handphone !!}</td>
            <td>{!! $dkm->nama_masjid !!}</td>
            <td>{!! $dkm->no_rekening_masjid !!}</td>
            <td>
              @if($dkm->status == "Pending")
                <font color="green">
              @elseif($dkm->status == "Disetujui")
                <font color="blue">
              @else
                <font color="red">
              @endif
              <b>{!! $dkm->status !!}</b>
            </td>
            <td>
                {!! Form::open(['route' => ['dkms.destroy', $dkm->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dkms.show', [$dkm->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dkms.edit', [$dkm->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@else
@include('home')
@endif
