@extends('layouts.main')

@section('container')
    <h1 class="mb-3">Article</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h3><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p> by <a href="http://"> {{ $post->user->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read more</a>
        </article>
    @endforeach
@endsection
