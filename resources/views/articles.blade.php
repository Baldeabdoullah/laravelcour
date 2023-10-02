@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>liste des articles</h2>

        <ul class="list-group">

            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <li class="list-group-item"><a style="list-style-type: "
                            href="{{ route('posts.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                        <p>{{ $post->content }}</p>


                    </li>
                @endforeach
            @else
                <span>Aucun poste en base de donnée</span>
            @endif

        </ul>

    </div>
@endsection
