@extends('layouts.layout')

@section('content')
    <div class="row">
            <div class="blog-post">
                <h2 class="blog-post-title">{{$post->title}}</h2>
                <p class="blog-post-meta">January 1, 2014 </p>
                <p>{{$post->intro}}</p>
                <hr>

                <p>{{$post->body_text}}</p>
            </div>
    </div>
@endsection
