@extends('master')
   @section('content')
        <h1>Productos Registrados</h1> 

<div class="container">
        <div class="row">
                @foreach($pro as $p)
                <div class="col -md -4">
                        <div class="card" style="width: 18rem;">
                        
                        <div class="card-body">
                        <h5 class="card-title">ID: {{$p->id}}</h5>
                        <p class="card-text">Fecha Registro: {{$p->fecha_registro}}</p>
                        <p class="card-text">Cantidad: {{$p->cantidad}}</p>
                        <p class="card-text">Administrador: {{$p->id_administrador}}</p>
                        <p class="card-text">Producto: {{$p->id_producto}}</p>
                        
                        
                         
                        </div>
                        </div>
                </div>
                @endforeach
        </div>
</diiv>
@stop