<table class="table table-responsive" id="mahasiswas-table">
    <thead>
        <th>Nama</th>
        <th>Password</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Alamat</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{!! $mahasiswa->nama !!}</td>
            <td>{!! $mahasiswa->password !!}</td>
            <td>{!! $mahasiswa->email !!}</td>
            <td>{!! $mahasiswa->no_telp !!}</td>
            <td>{!! $mahasiswa->alamat !!}</td>
            <td>
                {!! Form::open(['route' => ['mahasiswas.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('mahasiswas.show', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('mahasiswas.edit', [$mahasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>