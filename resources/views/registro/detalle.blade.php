@extends('master')
   @section('content')
<h4> Productos </h4>
<div class="container"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 30rem;">
                
                <div class="card-body">
                    <h5 class="card-title">ID: {{ $producto->id}} </h5>
                    <p class="card-text"> Nombre: {{$producto->nombre}} </p>
                    <p class="card-text"> Descripcion:: {{$producto->descripcion}} </p>
                    <p class="card-text"> Precio {{$producto->valor_unidad}} </p>
                    <p class="card-text"> Cantidad: {{$producto->stock}} </p>
                    <p class="card-text"> Categoria: {{$producto->category->descripcion}} </p>

                </div>
                <div style="color: blue" align="center">
                    @if($producto->stocks())
                            <p class="card-text"> Ultimas Unidades Disponibles </p>              
                    @endif
                </div>
                <a href="{{route('form_actualizaProducto', $producto->id)}}" class="btn btn-primary" > Editar </a>
                <br>
                <a href="{{route('eliminarProducto', $producto->id)}}" class="btn btn-danger" > Eliminar </a>
                <br>
                <a href="{{route('listadoProductos')}}" class="btn btn-success" >Volver </a>
            </div>
           
        </div>
    </div>
</div>
@stop