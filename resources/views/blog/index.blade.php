@extends('layouts.app')

@section('content')
    <h1>Blog</h1>

    @foreach($posts as $post)
        <div>
            <h2><a href="{{ url('/blog/'.$post->slug) }}">{{ $post->title }}</a></h2>
            <p>{{ $post->excerpt }}</p>
        </div>
    @endforeach
@endsection
