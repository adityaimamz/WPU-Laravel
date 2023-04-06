@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Article</h1>
    @foreach ($posts as $post)
    <h3><a href="/post/{{ $post->slug}}">{{ $post->title }}</a></h3>
    <p>{{ $post->excerpt }}</p>
    @endforeach
@endsection
