<table class="table table-responsive" id="fakultas-table">
    <thead>
        <th>Id Univ</th>
        <th>Nama</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($fakultas as $fakultas)
        <tr>
            <td>{!! $fakultas->id_univ !!}</td>
            <td>{!! $fakultas->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['fakultas.destroy', $fakultas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fakultas.show', [$fakultas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fakultas.edit', [$fakultas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>