@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h2>{{ $post->content }}</h2>
        {{-- <span>{{ $post->image ? $post->image->path : "pas d'image" }}</span> --}}

        <br>
        @foreach ($post->tags as $tag)
            <span> {{ $tag->name }} </span>
        @endforeach
        <br>

        <br>

        <img class="img-fluid w-60 " src="{{ Storage::url($post->image->path) }}" alt="">
        {{-- <span>Nom de l'artriste de l'image : {{ $post->imageArtist->name }}</span> --}}

        <br>
        <span>commentaire</span>
        @foreach ($post->comments as $comment)
            <p>{{ $comment->content }}</p>
        @endforeach

        <br>
        {{-- 
        <span>commentaire le plus recent: {{ $post->latestComment->content }}</span>

        <br>
        <span>commentaire le plus vieux: {{ $post->oldestComment->content }}</span> --}}




    </div>
@endsection
