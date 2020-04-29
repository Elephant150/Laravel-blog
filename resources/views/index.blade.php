@extends('layouts.layout')

@section('content')
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6">
                <h2>{{$post->title}}</h2>
                <p>{{$post->intro}}</p>
                <p><a href="/posts/{{$post->id}}" class="btn btn-secondary">Read more</a></p>
            </div>
        @endforeach
    </div>
@endsection
