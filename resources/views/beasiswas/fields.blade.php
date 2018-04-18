<!-- Nilai Un Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_un', 'Nilai Un:') !!}
    {!! Form::text('nilai_un', null, ['class' => 'form-control']) !!}
</div>

<!-- Penghasilan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('penghasilan', 'Penghasilan:') !!}
    {!! Form::text('penghasilan', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggungan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggungan', 'Tanggungan:') !!}
    {!! Form::text('tanggungan', null, ['class' => 'form-control']) !!}
</div>

<!-- Prestasi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prestasi', 'Prestasi:') !!}
    {!! Form::text('prestasi', null, ['class' => 'form-control']) !!}
</div>

<!-- Kriteria Rumah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kriteria_rumah', 'Kriteria Rumah:') !!}
    {!! Form::text('kriteria_rumah', null, ['class' => 'form-control']) !!}
</div>

<!-- Kepimilikan Rumah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kepimilikan_rumah', 'Kepimilikan Rumah:') !!}
    {!! Form::text('kepimilikan_rumah', null, ['class' => 'form-control']) !!}
</div>

<!-- Isi Rumah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isi_rumah', 'Isi Rumah:') !!}
    {!! Form::text('isi_rumah', null, ['class' => 'form-control']) !!}
</div>

<!-- Mandi Cuci Kakus Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mandi_cuci_kakus', 'Mandi Cuci Kakus:') !!}
    {!! Form::text('mandi_cuci_kakus', null, ['class' => 'form-control']) !!}
</div>

<!-- Luas Tanah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('luas_tanah', 'Luas Tanah:') !!}
    {!! Form::text('luas_tanah', null, ['class' => 'form-control']) !!}
</div>

<!-- Jarak Pusat Kota Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jarak_pusat_kota', 'Jarak Pusat Kota:') !!}
    {!! Form::text('jarak_pusat_kota', null, ['class' => 'form-control']) !!}
</div>

<!-- Sumber Air Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sumber_air', 'Sumber Air:') !!}
    {!! Form::text('sumber_air', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('id_mahasiswa', 'Mahasiswa:') !!}
    <select name="id_mahasiswa" class="form-control select1">
        @foreach($mahasiswa as $mos)
         <option value="{{ $mos->id}}" >{{ 'id_mahasiswa' == $mos->id ? 'selected="selected"' : '' }}{{ $mos->nama}}</option>
        @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('beasiswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
