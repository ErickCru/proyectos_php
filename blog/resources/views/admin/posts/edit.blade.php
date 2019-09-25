@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Editar Entrada
                </div>
                <div class="card-body">
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT','files'=> true])
                    !!}
                    @include('admin.posts.partial.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection