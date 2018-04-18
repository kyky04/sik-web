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

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jurusans.index') !!}" class="btn btn-default">Cancel</a>
</div>
