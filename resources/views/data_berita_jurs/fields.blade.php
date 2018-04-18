<!-- Id Univ Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_univ', 'Id Univ:') !!}
    {!! Form::text('id_univ', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Fak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fak', 'Id Fak:') !!}
    {!! Form::text('id_fak', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Jur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_jur', 'Id Jur:') !!}
    {!! Form::text('id_jur', null, ['class' => 'form-control']) !!}
</div>

<!-- Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori', 'Kategori:') !!}
    {!! Form::text('kategori', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc', 'Desc:') !!}
    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dataBeritaJurs.index') !!}" class="btn btn-default">Cancel</a>
</div>
