@extends('layouts.app')

@section('content')
    <h2 class="text-center">Creation d'un post</h2>

    <div class="container">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="text-primary">
                    {{ $error }}
                </div>
            @endforeach
        @endif


        <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titre</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contenu</label>
                <textarea class="form-control" name="content" id="exampleInputEmail1" cols="30" rows="10"></textarea>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail2" class="form-label">file</label>
                <input type="file" name="file" class="form-control" id="exampleInputEmail2">

            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>

    </div>
@endsection
