<table class="table table-responsive" id="prodis-table">
    <thead>
        <th>Id Univ</th>
        <th>Id Fakultas</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($prodis as $prodi)
        <tr>
            <td>{!! $prodi->id_univ !!}</td>
            <td>{!! $prodi->id_fakultas !!}</td>
            <td>
                {!! Form::open(['route' => ['prodis.destroy', $prodi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('prodis.show', [$prodi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('prodis.edit', [$prodi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>