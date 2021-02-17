@extends('master2')
   @section('content')
<h4> Producto </h4>
<div>
    <br>
    <p> Id: {{$producto->id}} </p>
    <p> Nombre: {{$producto->nombre}} </p> 
    <p> Descripcion: {{$producto->descripcion}} </p> 
    <p> Precio: {{$producto->valor_unidad}} </p> 
    <p> Stock: {{$producto->stock}} </p> 
    <p> categoria: {{$producto->categoria}} </p> 

    <a href="{{route('form_consultaProducto')}}"> Regresar </a>

</div>

@stop