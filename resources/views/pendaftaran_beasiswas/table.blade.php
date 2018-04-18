<table class="table table-responsive" id="pendaftaranBeasiswas-table">
    <thead>
        <th>Id Univ</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Jurusan</th>
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
    @foreach($pendaftaranBeasiswas as $pendaftaranBeasiswa)
        <tr>
            <td>{!! $pendaftaranBeasiswa->id_univ !!}</td>
            <td>{!! $pendaftaranBeasiswa->nama !!}</td>
            <td>{!! $pendaftaranBeasiswa->nim !!}</td>
            <td>{!! $pendaftaranBeasiswa->jurusan !!}</td>
            <td>{!! $pendaftaranBeasiswa->alamat !!}</td>
            <td>{!! $pendaftaranBeasiswa->semester !!}</td>
            <td>{!! $pendaftaranBeasiswa->ipk !!}</td>
            <td>{!! $pendaftaranBeasiswa->prestasi_akademik !!}</td>
            <td>{!! $pendaftaranBeasiswa->pendapatan_orangtua !!}</td>
            <td>{!! $pendaftaranBeasiswa->tanggungan_orangtua !!}</td>
            <td>{!! $pendaftaranBeasiswa->kendaraan_pribadi !!}</td>
            <td>
                {!! Form::open(['route' => ['pendaftaranBeasiswas.destroy', $pendaftaranBeasiswa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pendaftaranBeasiswas.show', [$pendaftaranBeasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pendaftaranBeasiswas.edit', [$pendaftaranBeasiswa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>