@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $configuration->blog_title }}</h1>
            <p>{{ $configuration->blog_description }}</p>
            <p>{{ $configuration->blog_footer }}</p>
        </div>
    </div>
@endsection