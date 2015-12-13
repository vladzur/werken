@extends('../app')

@section('content')

    <h2>Index</h2>

    <table class="table table-bordered table-condensed table-hover table-striped">
        <thead>
        <tr>
            <th>Created</th>
            <th>Ttle</th>
            <th>Author</th>
        </tr>
        </thead>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->user->name }}</td>
            </tr>
        @endforeach
    </table>
@endsection