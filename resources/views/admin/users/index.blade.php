@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h2>Posts</h2>
        </div>
        <div class="col-md-2">
            <a href="{{ url('admin/users/create') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table id="users-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td>
                            <form method="post" action="{{ url("admin/users/{$user->id}") }}"
                                  onsubmit="return ConfirmDelete()">
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                                <a class="btn btn-default" href="{{ url("admin/users/{$user->id}") }}" role="button">
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                </a>
                                <a class="btn btn-default" href="{{ url("admin/users/{$user->id}/edit") }}"
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
            $('#users-table').DataTable();
        });

        function ConfirmDelete() {
            return confirm('Are you sure?');
        }
    </script>
@endsection