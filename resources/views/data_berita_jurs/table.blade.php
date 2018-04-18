<table class="table table-responsive" id="dataBeritaJurs-table">
    <thead>
        <th>Id Univ</th>
        <th>Id Fak</th>
        <th>Id Jur</th>
        <th>Kategori</th>
        <th>Judul</th>
        <th>Desc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($dataBeritaJurs as $dataBeritaJur)
        <tr>
            <td>{!! $dataBeritaJur->id_univ !!}</td>
            <td>{!! $dataBeritaJur->id_fak !!}</td>
            <td>{!! $dataBeritaJur->id_jur !!}</td>
            <td>{!! $dataBeritaJur->kategori !!}</td>
            <td>{!! $dataBeritaJur->judul !!}</td>
            <td>{!! $dataBeritaJur->desc !!}</td>
            <td>
                {!! Form::open(['route' => ['dataBeritaJurs.destroy', $dataBeritaJur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('dataBeritaJurs.show', [$dataBeritaJur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('dataBeritaJurs.edit', [$dataBeritaJur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>