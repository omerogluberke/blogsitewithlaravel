@extends('main')

@section('title', '|Blog')

@section('content')
    @foreach($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{$post->title}}</h2>
            <h5>{{date('d/m/Y', strtotime($post->created_at))}}</h5>
            <h5>{{$post->body}}</h5>

            <a href="{{route('blog.single',$post->slug)}}">Read More</a>
        </div>
    </div>
    @endforeach

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection