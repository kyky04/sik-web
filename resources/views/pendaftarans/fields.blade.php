<!-- Id Univ Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_univ', 'Id Univ:') !!}
    {!! Form::text('id_univ', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_mahasiswa', 'Nama Mahasiswa:') !!}
    {!! Form::text('nama_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nim', 'Nim:') !!}
    {!! Form::text('nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Jurusan Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jurusan_mahasiswa', 'Jurusan Mahasiswa:') !!}
    {!! Form::text('jurusan_mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester', 'Semester:') !!}
    {!! Form::text('semester', null, ['class' => 'form-control']) !!}
</div>

<!-- Ipk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ipk', 'Ipk:') !!}
    {!! Form::text('ipk', null, ['class' => 'form-control']) !!}
</div>

<!-- Prestasi Akademik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prestasi_akademik', 'Prestasi Akademik:') !!}
    {!! Form::text('prestasi_akademik', null, ['class' => 'form-control']) !!}
</div>

<!-- Pendapatan Orangtua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pendapatan_orangtua', 'Pendapatan Orangtua:') !!}
    {!! Form::text('pendapatan_orangtua', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggungan Orangtua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggungan_orangtua', 'Tanggungan Orangtua:') !!}
    {!! Form::text('tanggungan_orangtua', null, ['class' => 'form-control']) !!}
</div>

<!-- Kendaraan Pribadi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kendaraan_pribadi', 'Kendaraan Pribadi:') !!}
    {!! Form::text('kendaraan_pribadi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pendaftarans.index') !!}" class="btn btn-default">Cancel</a>
</div>
