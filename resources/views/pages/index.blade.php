@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 id = "index_title">{{$title}}</h1>
        <p>A new kind of coding skills. Welcome aboard programmer.</p>
        <p><a class = "btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class = "btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection