<table class="table table-responsive" id="houses-table">
    <thead>
        <tr>
            <th>Shape</th>
        <th>Coords</th>
        <th>Title</th>
        <th>Slug</th>
        <th>Img</th>
        <th>Description</th>
        <th>Plane</th>
        <th>Video</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($houses as $houses)
        <tr>
            <td>{!! $houses->shape !!}</td>
            <td>{!! $houses->coords !!}</td>
            <td>{!! $houses->title !!}</td>
            <td>{!! $houses->slug !!}</td>
            <td>{!! $houses->img !!}</td>
            <td>{!! $houses->description !!}</td>
            <td>{!! $houses->plane !!}</td>
            <td>{!! $houses->video !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.houses.destroy', $houses->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.houses.show', [$houses->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.houses.edit', [$houses->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>