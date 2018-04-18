<!-- Id Univ Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_univ', 'Id Univ:') !!}
    {!! Form::text('id_univ', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Fakultas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_fakultas', 'Id Fakultas:') !!}
    {!! Form::text('id_fakultas', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prodis.index') !!}" class="btn btn-default">Cancel</a>
</div>
