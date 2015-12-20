@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2>Posts</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ url('admin/posts/create') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="posts-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Created</th>
                    <th>Published</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Draft</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->published_at }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->draft }}</td>
                        <td>
                            <form method="post" action="{{ url("admin/posts/{$post->id}") }}"
                                  onsubmit="return ConfirmDelete()">
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                                <a class="btn btn-default" href="{{ url("admin/posts/{$post->id}") }}" role="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-default" href="{{ url("admin/posts/{$post->id}/edit") }}"
                                   role="button">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </a>
                                <button type="submit" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#posts-table').DataTable();
        });

        function ConfirmDelete() {
            return confirm('Are you sure?');
        }
    </script>
@endsection