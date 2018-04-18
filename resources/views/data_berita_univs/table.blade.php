<table class="table table-responsive" id="dataBeritaUnivs-table">
    <thead>
        <th>Id Univ</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Desc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($dataBeritaUnivs as $dataBeritaUniv)
        <tr>
            <td>{!! $dataBeritaUniv->id_univ !!}</td>
            <td>{!! $dataBeritaUniv->kategori !!}</td>
            <td>{!! $dataBeritaUniv->judul !!}</td>
            <td>{!! $dataBeritaUniv->desc !!}</td>
            <td>
                {!! Form::open(['route' => ['dataBeritaUnivs.destroy', $dataBeritaUniv->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dataBeritaUnivs.show', [$dataBeritaUniv->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dataBeritaUnivs.edit', [$dataBeritaUniv->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>