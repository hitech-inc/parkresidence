<table class="table table-responsive" id="texts-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Title</th>
        <th>Text</th>
        <th>Link</th>
        <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($texts as $texts)
        <tr>
            <td>{!! $texts->name !!}</td>
            <td>{!! $texts->title !!}</td>
            <td>{!! $texts->text !!}</td>
            <td>{!! $texts->link !!}</td>
            <td>{!! $texts->img !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.texts.destroy', $texts->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.texts.show', [$texts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.texts.edit', [$texts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>