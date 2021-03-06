@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Crear Entrada
                </div>
                <div class="card-body">
                    {!! Form::open(['route'=>'posts.store', 'files'=> true]) !!}
                    @include('admin.posts.partial.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection