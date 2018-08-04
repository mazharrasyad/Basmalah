@if(Auth::user()->role_id == 1)
<table class="table table-responsive" id="pengajars-table">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
        <th>No Handphone</th>
        <th>Email</th>
        <th>Bidang Keahlian</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pengajars as $pengajar)
        <tr>
            <td>{!! $pengajar->nama_lengkap !!}</td>
            <td>{!! $pengajar->no_handphone !!}</td>
            <td>{!! $pengajar->email !!}</td>
            <td>{!! $pengajar->bidang_keahlian !!}</td>
            <td>
              @if($pengajar->status == "Pending")
                <font color="green">
              @elseif($pengajar->status == "Disetujui")
                <font color="blue">
              @else
                <font color="red">
              @endif
              <b>{!! $pengajar->status !!}</b>
            </td>
            <td>
                {!! Form::open(['route' => ['pengajars.destroy', $pengajar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pengajars.show', [$pengajar->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pengajars.edit', [$pengajar->url]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
