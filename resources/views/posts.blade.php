@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Article</h1>
    @foreach ($posts as $post)
        <h2>
        <a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a>
        </h2>
        <h5>by {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    @endforeach
@endsection
