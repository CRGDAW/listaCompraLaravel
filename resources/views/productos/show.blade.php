@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="https://picsum.photos/200/300/?random" style="height:200px" />
    </div>
    <div class="col-sm-8">
        <p>Nombre: {{$producto['nombre']}}</p>
        <p>Categoría: {{$producto['categoria']}}</p>
        <p>Estado: Producto {{$producto->pendiente ? 'pendiente de compra': 'actualmente comprado'}}</p>
        <a href="#" class="btn btn-danger">{{$producto->pendiente ? 'Pendiente de compra': 'Comprado'}}</a>
        <a href="{{action('App\Http\Controllers\ProductoController@getEdit',[$producto->id])}}" class="btn btn-info">Editar</a>
        <a href="{{action('App\Http\Controllers\HomeController@getHome')}}" class="btn btn-info">Volver al index</a>
    </div>
</div>
@stop
