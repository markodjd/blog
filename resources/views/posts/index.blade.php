@extends('layouts.app')
@section('title', 'Blog')

@section('content')
    <h1>Posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="{{ route('post', ['post' => $post->id]) }}">{{ $post->title }}</a></li>
        @empty
            <p>No posts.</p>
        @endforelse
    </ul>
@endsection
