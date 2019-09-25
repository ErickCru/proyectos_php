@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Crear Categoría
                </div>
                <div class="card-body">
                    {!! Form::open(['route'=>'categories.store']) !!}
                    @include('admin.categories.partial.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection