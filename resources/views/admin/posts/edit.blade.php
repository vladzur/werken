@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <a href="{{ url('admin/posts') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Posts
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <h2>Edit Post</h2>
            {!! Form::open(['url' => "admin/posts/{$post->id}", 'method' => 'put']) !!}
            {!! csrf_field() !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="tags">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" value="{{ $current_tags }}"/>
            </div>
            <div class="form-group">
                {!! Form::label('published_at', 'Published At') !!}
                {!! Form::text('published_at', $post->published_at, ['class' => 'form-control']) !!}
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="draft" value="1" {{ $post->draft ? 'checked' : '' }}> Draft
                </label>
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content') !!}
                {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

    <script type="text/javascript">
        var simplemde = new SimpleMDE({element: $("#content")[0]});
        var tag_list = {!! $tag_list !!};
        var tags = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: tag_list
        });
        $('#tags').tokenfield({
            typeahead: [null, {source : tags}]
        });
        $(function() {
            $('#published_at').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script>
@endsection