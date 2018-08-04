<table class="table table-responsive" id="penggunas-table">
    <thead>
        <tr>
          <th>Id</th>
            <th>Role</th>
            <th>Name</th>
            <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($penggunas as $pengguna)
        <tr>
            <td>{!! $pengguna->id !!}</td>
            <td>{!! $pengguna->role['name'] !!}</td>
            <td>{!! $pengguna->name !!}</td>
            <td>{!! $pengguna->email !!}</td>
            <td>
                {!! Form::open(['route' => ['penggunas.destroy', $pengguna->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('penggunas.show', [$pengguna->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('penggunas.edit', [$pengguna->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
