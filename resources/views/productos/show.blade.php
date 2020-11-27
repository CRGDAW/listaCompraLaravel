@extends('layouts.master')

@section('content')

<div class="row">

    <div class="col-sm-4">
        <img src="https://picsum.photos/200/300/?random" style="height:200px" />
    </div>
    <div class="col-sm-8">
        <p>Nombre: {{$producto[0]}}</p>
        <p>Categoría: {{$producto[1]}}</p>
        <p>Estado: Producto actualmente comprado</p>
        <a href="#" class="btn btn-danger">Pendiente de compra</a>
        <a href="{{action('App\Http\Controllers\ProductoController@getEdit',[$id])}}" class="btn btn-info">Editar</a>
        <a href="{{action('App\Http\Controllers\HomeController@getHome')}}" class="btn btn-info">Volver al index</a>
    </div>
</div>
@stop
