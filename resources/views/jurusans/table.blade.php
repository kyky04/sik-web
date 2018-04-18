<table class="table table-responsive" id="jurusans-table">
    <thead>
        <th>Id Univ</th>
        <th>Id Fak</th>
        <th>Nama</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($jurusans as $jurusan)
        <tr>
            <td>{!! $jurusan->id_univ !!}</td>
            <td>{!! $jurusan->id_fak !!}</td>
            <td>{!! $jurusan->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['jurusans.destroy', $jurusan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jurusans.show', [$jurusan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jurusans.edit', [$jurusan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>