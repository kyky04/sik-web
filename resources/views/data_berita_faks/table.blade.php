<table class="table table-responsive" id="dataBeritaFaks-table">
    <thead>
        <th>Id Univ</th>
        <th>Id Fak</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Desc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($dataBeritaFaks as $dataBeritaFak)
        <tr>
            <td>{!! $dataBeritaFak->id_univ !!}</td>
            <td>{!! $dataBeritaFak->id_fak !!}</td>
            <td>{!! $dataBeritaFak->kategori !!}</td>
            <td>{!! $dataBeritaFak->judul !!}</td>
            <td>{!! $dataBeritaFak->desc !!}</td>
            <td>
                {!! Form::open(['route' => ['dataBeritaFaks.destroy', $dataBeritaFak->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dataBeritaFaks.show', [$dataBeritaFak->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dataBeritaFaks.edit', [$dataBeritaFak->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>