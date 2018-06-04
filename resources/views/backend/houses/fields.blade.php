<!-- Shape Field -->
<div class="form-group col-sm-3">
    {!! Form::label('shape', 'Shape:') !!}
    {!! Form::text('shape', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-3">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Coords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('coords', 'Coords:') !!}
    {!! Form::text('coords', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-3">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img') !!}
</div>
<!-- Small_Img Field -->
<div class="form-group col-sm-3">
    {!! Form::label('small_img', 'Small_img:') !!}
    {!! Form::file('small_img') !!}
</div>

<!-- Plane Field -->
<div class="form-group col-sm-3">
    {!! Form::label('plane', 'Plane:') !!}
    {!! Form::file('plane') !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-3">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::file('video') !!}
</div>

<div class="clearfix"></div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control ckeditor']) !!}
</div>

<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.houses.index') !!}" class="btn btn-default">Cancel</a>
</div>
