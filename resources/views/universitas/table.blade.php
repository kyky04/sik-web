<table class="table table-responsive" id="universitas-table">
    <thead>
        <th>Nama</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($universitas as $universitas)
        <tr>
            <td>{!! $universitas->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['universitas.destroy', $universitas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('universitas.show', [$universitas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('universitas.edit', [$universitas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>