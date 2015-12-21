@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-1 col-md-offset-1">
            <a href="{{ url('admin/tags') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Tags
            </a>
        </div>

    </div>
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <h2>{{ $tag->name }}</h2>
        </div>
    </div>

    <script type="text/javascript">

    </script>
@endsection