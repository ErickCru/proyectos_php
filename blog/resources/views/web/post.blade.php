@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 mx-auto">
        <h2 class="text-lg-center">{{$post->name}}</h2>
        <div class="card">
            <div class="card-header">
                Categoria
                <a href="{{ route('category', $post->category->slug)}}">{{$post->category->name}}</a>
            </div>
            <div class="card-body">
                @if ($post->file)
                <img src="{{$post->file}}" class="img-fluid mb-2">
                @endif
                {{$post->excerpt}}
                <hr>
                {!! $post->body !!}
                <hr>
            </div>
            <div class="card-footer">
                Etiquetas
                @foreach ($post->tags as $tag)
                <a href="{{ route('tag', $tag->slug)}}">{{$tag->name}}</a>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection