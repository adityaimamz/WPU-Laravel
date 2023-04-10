@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        <p>By Aditya in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a class="text-decoration-none" href="/blog">Back to Posts</a>
@endsection
