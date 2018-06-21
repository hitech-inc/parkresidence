
<li class="{{ Request::is('houses*') ? 'active' : '' }}">
    <a href="{!! route('backend.houses.index') !!}"><i class="fa fa-edit"></i><span>Houses</span></a>
</li>

<li class="{{ Request::is('texts*') ? 'active' : '' }}">
    <a href="{!! route('backend.texts.index') !!}"><i class="fa fa-edit"></i><span>Texts</span></a>
</li>

