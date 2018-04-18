<table class="table table-responsive" id="pendaftars-table">
    <thead>
        <th>Id Univ</th>
        <th>Nama Mahasiswa</th>
        <th>Nim</th>
        <th>Jurusan Mahasiswa</th>
        <th>Alamat</th>
        <th>Semester</th>
        <th>Ipk</th>
        <th>Prestasi Akademik</th>
        <th>Pendapatan Orangtua</th>
        <th>Tanggungan Orangtua</th>
        <th>Kendaraan Pribadi</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pendaftars as $pendaftar)
        <tr>
            <td>{!! $pendaftar->id_univ !!}</td>
            <td>{!! $pendaftar->nama_mahasiswa !!}</td>
            <td>{!! $pendaftar->nim !!}</td>
            <td>{!! $pendaftar->jurusan_mahasiswa !!}</td>
            <td>{!! $pendaftar->alamat !!}</td>
            <td>{!! $pendaftar->semester !!}</td>
            <td>{!! $pendaftar->ipk !!}</td>
            <td>{!! $pendaftar->prestasi_akademik !!}</td>
            <td>{!! $pendaftar->pendapatan_orangtua !!}</td>
            <td>{!! $pendaftar->tanggungan_orangtua !!}</td>
            <td>{!! $pendaftar->kendaraan_pribadi !!}</td>
            <td>
                {!! Form::open(['route' => ['pendaftars.destroy', $pendaftar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pendaftars.show', [$pendaftar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pendaftars.edit', [$pendaftar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>