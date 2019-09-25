@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center">
                    Lista de Categorías
                    <a href="{{ route('categories.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td width="10px">
                                    <a href="{{route('categories.show', $category->id)}}"
                                        class="btn btn-sm btn-outline-secondary">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{route('categories.edit', $category->id)}}"
                                        class="btn btn-sm btn-outline-secondary">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' =>
                                    'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection