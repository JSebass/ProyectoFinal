@extends('master')
   @section('content')

<h4> Productos </h4>
<div class="container"> 
    <div class="row">
        @foreach($productos as $p)
        <div class="col-md-4">
            <div class="card" style="width: 15rem;">
                
                <div class="card-body">
                    <h5 class="card-title"> ID: {{ $p->id}} </h5>
                    <p class="card-text"> nombre: {{$p->nombre}} </p>
                    <p class="card-text"> Categoria: {{$p->descripcion}} </p>
                    <p class="card-text"> Precio: {{$p->valor_unidad}} </p>
                    
                    
                </div>
                <a href="{{route('detalleProducto', $p->id)}}" class="btn btn-primary" > Ver detalles </a>
            </div>
           
        </div>
        @endforeach
    </div>
</div>
@stop