<table class="table table-responsive" id="beasiswas-table">
    <thead>
        <th>Nilai Un</th>
        <th>Penghasilan</th>
        <th>Tanggungan</th>
        <th>Prestasi</th>
        <th>Kriteria Rumah</th>
        <th>Kepimilikan Rumah</th>
        <th>Isi Rumah</th>
        <th>Mandi Cuci Kakus</th>
        <th>Luas Tanah</th>
        <th>Jarak Pusat Kota</th>
        <th>Sumber Air</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($beasiswas as $beasiswa)
        <tr>
            <td>{!! $beasiswa->nilai_un !!}</td>
            <td>{!! $beasiswa->penghasilan !!}</td>
            <td>{!! $beasiswa->tanggungan !!}</td>
            <td>{!! $beasiswa->prestasi !!}</td>
            <td>{!! $beasiswa->kriteria_rumah !!}</td>
            <td>{!! $beasiswa->kepimilikan_rumah !!}</td>
            <td>{!! $beasiswa->isi_rumah !!}</td>
            <td>{!! $beasiswa->mandi_cuci_kakus !!}</td>
            <td>{!! $beasiswa->luas_tanah !!}</td>
            <td>{!! $beasiswa->jarak_pusat_kota !!}</td>
            <td>{!! $beasiswa->sumber_air !!}</td>
            <td>
                {!! Form::open(['route' => ['beasiswas.destroy', $beasiswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('beasiswas.show', [$beasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('beasiswas.edit', [$beasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>