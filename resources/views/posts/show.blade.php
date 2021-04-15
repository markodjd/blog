@extends('layouts.app')
@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }} <small>{{ $post->created_at->diffForHumans() }}</small></h1>
    <p>{{ $post->body }}</p>
@endsection
