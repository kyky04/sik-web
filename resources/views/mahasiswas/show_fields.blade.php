<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mahasiswa->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $mahasiswa->nama !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $mahasiswa->password !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $mahasiswa->email !!}</p>
</div>

<div class="form-group">
    {!! Form::label('no_telp', 'No Telp:') !!}
    <p>{!! $mahasiswa->no_telp !!}</p>
</div>

<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{!! $mahasiswa->alamat !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mahasiswa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mahasiswa->updated_at !!}</p>
</div>

