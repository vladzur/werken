@extends('../app')

@section('content')
    <div class="row">
        <a href="{{ url('/admin/configurations/edit') }}" class="btn btn-primary">Edit</a>
        <div class="col-md-12">
            <h1>{{ $configuration->blog_title }}</h1>
            <p>{{ $configuration->blog_description }}</p>
            <p>{{ $configuration->blog_footer }}</p>
            <p>{{ $configuration->analytics }}</p>
        </div>
    </div>
@endsection