@extends('../app')

@section('content')
    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <a href="{{ url('admin/posts') }}" class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left" aria-disabled="true"></span> Back
            </a>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $post->title }}</h3>
                </div>
                <div class="panel-body">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>