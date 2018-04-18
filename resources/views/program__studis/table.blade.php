<table class="table table-responsive" id="programStudis-table">
    <thead>
        <th>Id Univ</th>
        <th>Id Fak</th>
        <th>Nama</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($programStudis as $programStudi)
        <tr>
            <td>{!! $programStudi->id_univ !!}</td>
            <td>{!! $programStudi->id_fak !!}</td>
            <td>{!! $programStudi->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['programStudis.destroy', $programStudi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('programStudis.show', [$programStudi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('programStudis.edit', [$programStudi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>