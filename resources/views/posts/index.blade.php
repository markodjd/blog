@extends('layouts.app')
@section('title', 'Vivify Blog')

@section('content')
    <h1>All posts</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="{{ route('post', ['post' => $post->id]) }}">{{ $post->title }}</a></li>
        @empty
            <p>No posts.</p>
        @endforelse
    </ul>
@endsection
