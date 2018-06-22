@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card bg-light p-3" >
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <image class="img-thumbnail" src="/storage/cover_images/{{$post->cover_image}}">
                        {{-- <div class="img_post" style="background-image:url('/public/storage/cover_images/DffZGS3WsAA9MSg_1529677717.jpg');"></div> --}}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                <div>
            </div> 
            <br>
            
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found!</p>
    @endif

@endsection



 
            {{-- <div class="card" style="width: 18rem;">
                <img class="card-img-top"  alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}