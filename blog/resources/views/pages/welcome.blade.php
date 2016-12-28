@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog.</h1>
                <p>Thank you for visiting this site. This is a laravel project.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>

    <div class="rov">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="post">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <a href="{{route('blog.single',$post->slug)}}" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1" style="color:red">Sidebar</div>
    </div>
@endsection


