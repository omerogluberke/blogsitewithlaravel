@extends('main')

@section('title', '| Edit Post')

@section('content')
    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
        <div class="col-md-8">
            {{Form::label('title', 'Title:')}}
            {{Form::text('title',null, ["class" => 'form-control'])}}

            {{Form::label('slug', 'Slug:')}}
            {{Form::text('slug',null,array('class' => 'form-control'))}}

            {{Form::label('body', 'Post Body:', array('class' => 'form-spacing-top'))}}
            {{Form::textarea('body',null, ["class" => 'form-control'])}}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Url Slug:</dt>
                    <dd><a href="{{url($post->slug)}}">{{url($post->slug) }}</a></dd>

                    <dt>Create at:</dt>
                    <dd>{{ date('d/m/Y',strtotime($post->created_at))}}</dd>

                    <dt>Last updated:</dt>
                    <dd>{{ date('d/m/Y', strtotime($post->updated_at)) }}</dd>
                    <hr>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.show',array($post->id))}}" class="btn btn-primary btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                            {{Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
                        </div>
                    </div>
                </dl>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

@endsection