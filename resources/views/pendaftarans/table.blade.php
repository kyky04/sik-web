<table class="table table-responsive" id="pendaftarans-table">
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
    @foreach($pendaftarans as $pendaftaran)
        <tr>
            <td>{!! $pendaftaran->id_univ !!}</td>
            <td>{!! $pendaftaran->nama_mahasiswa !!}</td>
            <td>{!! $pendaftaran->nim !!}</td>
            <td>{!! $pendaftaran->jurusan_mahasiswa !!}</td>
            <td>{!! $pendaftaran->alamat !!}</td>
            <td>{!! $pendaftaran->semester !!}</td>
            <td>{!! $pendaftaran->ipk !!}</td>
            <td>{!! $pendaftaran->prestasi_akademik !!}</td>
            <td>{!! $pendaftaran->pendapatan_orangtua !!}</td>
            <td>{!! $pendaftaran->tanggungan_orangtua !!}</td>
            <td>{!! $pendaftaran->kendaraan_pribadi !!}</td>
            <td>
                {!! Form::open(['route' => ['pendaftarans.destroy', $pendaftaran->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pendaftarans.show', [$pendaftaran->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pendaftarans.edit', [$pendaftaran->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>