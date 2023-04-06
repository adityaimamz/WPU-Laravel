@extends('layouts.main')

@section('container')
    <article>
        <h3>{{ $post->title }}</h3>
        {!! $post->body !!}
    </article>
    <a href="/blog">Back to Blog</a>
@endsection
