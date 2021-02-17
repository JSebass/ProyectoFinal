@extends('master')
   @section('content')
<div class="container">
<h1> Registro de Categorias </h1>
    <form action="{{ url('categorias/registro') }}" method="POST">
        @csrf
       
        <label for="idCat">ID </label>
        <input type="number" id='idCat' name='idCat' class="form-control" required> <br> <br>
    
        <label for="descripcionCat">Descripcion </label>
        <input type="text" id='descripcionCat' name='descripcionCat' class="form-control" required> <br> <br>
            
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop