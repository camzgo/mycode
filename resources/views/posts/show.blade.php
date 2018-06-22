@extends('layouts.app')

@section('content')
    <a href="/posts"  class = "btn btn-secondary">Go Back</a>
    <div id = "bcont">
       
        <h1>{{$post->title}}</h1>
        <image style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
            <div id="marg">    
                <div>
                    {!!$post->body!!}
                </div>
                <hr>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                <hr>

                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        <div class ="pull-right">
                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                        </div>
                    @endif
                @endif
            </div>
    </div>
    
@endsection