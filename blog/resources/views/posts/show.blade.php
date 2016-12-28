@extends('main')

@section('title', '| View Post')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Url Slug:</dt>
                    <dd><a href="{{route('blog.single',$post->slug)}}">{{route('blog.single',$post->slug) }}</a></dd>

                    <dt>Create at:</dt>
                    <dd>{{ date('d/m/Y',strtotime($post->created_at))}}</dd>

                    <dt>Last updated:</dt>
                    <dd>{{ date('d/m/Y', strtotime($post->updated_at)) }}</dd>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.edit',array($post->id))}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            {!! Form::open(array('route' => array('posts.destroy', $post->id),'method' => 'DELETE')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block')) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            {!! Html::linkRoute('posts.index', '<<See all post>>', array(), array('class' => 'btn  btn-default btn-block
                            btn-hl-spacing')) !!}
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>

@endsection