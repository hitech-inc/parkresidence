<!-- Shape Field -->
<div class="form-group col-sm-3">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
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
    {!! Form::textarea('title', null, ['class' => 'form-control ckeditor']) !!}
    <!-- {!! Form::text('title', null, ['class' => 'form-control']) !!} -->
</div>

<!-- Удобства Field -->
<div class="form-group col-sm-6">
    {!! Form::label('udobstva', 'Udobstva:') !!}
    {!! Form::textarea('udobstva', null, ['class' => 'form-control']) !!}
    <!-- <input class="form-control" name="title" type="text" value="&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;/images/houses/title/taunhausWhite.jpg&quot; style=&quot;float:left; height:88px; margin-left:10px; margin-right:10px; width:134px&quot; /&gt;Имя: Таун хаус белый&lt;/p&gt;

&lt;p&gt;Статус: Продается.&lt;/p&gt;

&lt;p&gt;В Park Residence мы представляем уникальные ТАУНХАУСЫ площадью 263 квадратных метров с современным дизайном фасада и продуманной, функциональной планировкой. Вы можете приобрести ТАУНХАУСЫ как с черновой так и с чистой отделкой.&nbsp;&lt;/p&gt;" id="title"> -->
</div>


<!-- Slug Field -->
<div class="form-group col-sm-3">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-3">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->img))
        <img src="{{ asset('images/houses/house-details/' . $houses->img) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('img', 'Img:') !!}
    {!! Form::file('img') !!}
</div>
<!-- Small_Img Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->small_img))
        <img src="{{ asset('images/houses/small_img/' . $houses->small_img) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('small_img', 'Small_img:') !!}
    {!! Form::file('small_img') !!}
</div>

<!-- Plane Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->plane))
        <img src="{{ asset('images/houses/house-details/' . $houses->plane) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('plane', 'Plane:') !!}
    {!! Form::file('plane') !!}
</div>

<!-- Plane2 Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->plane2))
        <img src="{{ asset('images/houses/house-details/' . $houses->plane2) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('plane2', 'Plane 2:') !!}
    {!! Form::file('plane2') !!}
</div>

<!--Big Plane1 Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->big_plane1))
        <img src="{{ asset('images/houses/house-details/' . $houses->big_plane1) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('big_plane1', 'Big plane 1:') !!}
    {!! Form::file('big_plane1') !!}
</div>

<!-- Big Plane2 Field -->
<div class="form-group col-sm-3">
    @if (isset($houses) && isset($houses->big_plane2))
        <img src="{{ asset('images/houses/house-details/' . $houses->big_plane2) }}" alt="" class="img-responsive">
        <br>
    @endif

    {!! Form::label('big_plane2', 'Big plane 2:') !!}
    {!! Form::file('big_plane2') !!}
</div>

<div class="clearfix"></div>
<hr></hr>

<!-- Квадтратура Field -->
<div class="form-group col-sm-3">
    {!! Form::label('kvadratura', 'Квадратура:') !!}
    {!! Form::text('kvadratura', null, ['class' => 'form-control']) !!}
</div>

<!-- Участок Field -->
<div class="form-group col-sm-3">
    {!! Form::label('uchastok', 'Участок:') !!}
    {!! Form::text('uchastok', null, ['class' => 'form-control']) !!}
</div>

<!-- Высота потолка Field -->
<div class="form-group col-sm-3">
    {!! Form::label('visota_potolka', 'Высота потолка:') !!}
    {!! Form::text('visota_potolka', null, ['class' => 'form-control']) !!}
</div>

<!-- Высота потолка в гостинной Field -->
<div class="form-group col-sm-3">
    {!! Form::label('visota_potolka_gostinaya', 'Высота потолка в гостинной') !!}
    {!! Form::text('visota_potolka_gostinaya', null, ['class' => 'form-control']) !!}
</div>

<!-- Спальные комнаты Field -->
<div class="form-group col-sm-3">
    {!! Form::label('spalnie_comnati', 'Спальные комнаты') !!}
    {!! Form::text('spalnie_comnati', null, ['class' => 'form-control']) !!}
</div>

<!-- Ванные комнаты Field -->
<div class="form-group col-sm-3">
    {!! Form::label('vannie_comnati', 'Ванные комнаты') !!}
    {!! Form::text('vannie_comnati', null, ['class' => 'form-control']) !!}
</div>

<!-- Терраса Field -->
<div class="form-group col-sm-3">
    {!! Form::label('terrasa', 'Терраса') !!}
    {!! Form::text('terrasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Паркинг Field -->
<div class="form-group col-sm-3">
    {!! Form::label('parking', 'Паркинг') !!}
    {!! Form::text('parking', null, ['class' => 'form-control']) !!}
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
