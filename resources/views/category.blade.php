
@extends('layouts.main')

@section('container')
    <h2 class="mb-3">Post Category: {{ $category }}</h2>

    @foreach ($posts as $post)
        <article class="mb-5">
            <h3><a class="text-decoration-none" href="/post/{{ $post->slug }}">{{ $post->title }}</a></h3>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}">Read more</a>
        </article>
    @endforeach

@endsection
