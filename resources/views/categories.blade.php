@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Categories</h1>

    @foreach ($categories as $category)
    <ul>
        <li><a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
        <a class="text-decoration-none" href="/post/{{ $post->slug }}">Read more</a>
    </ul>
    @endforeach

@endsection
