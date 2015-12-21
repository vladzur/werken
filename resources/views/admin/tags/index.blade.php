@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2>Tags</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ url('admin/tags/create') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="tags-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Created</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->created_at }}</td>
                        <td>{{ $tag->name }}</td>
                        <td>
                            <form method="post" action="{{ url("admin/tags/{$tag->id}") }}"
                                  onsubmit="return ConfirmDelete()">
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                                <a class="btn btn-default" href="{{ url("admin/tags/{$tag->id}") }}" role="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-default" href="{{ url("admin/tags/{$tag->id}/edit") }}"
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
            $('#tags-table').DataTable();
        });

        function ConfirmDelete() {
            return confirm('Are you sure?');
        }
    </script>
@endsection