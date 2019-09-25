@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="text-monospace">Lista de articulos</h2>
            @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    {{$post->name}}
                </div>
                <div class="card-body">
                    @if ($post->file)
                    <img src="{{$post->file}}" class="img-fluid">
                    @endif
                </div>
                <div class="card-footer">
                    {{$post->excerpt}}
                    <a href="{{ route('post', $post->slug)}}" class="float-right">Leer más</a>
                </div>
            </div>
            @endforeach
            {{$posts->render()}}
        </div>
    </div>
</div>
@endsection