@extends('master')
   @section('content')
        <h1>UBICACION</h1> 
        <div class="container">
            <p> Ferreteria J&J
                Cra. 6 #1-197 a 1-125, Ipiales, Nariño</p>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d593.0290002604439!2d-77.62642658872878!3d0.8220413315000077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e296b6fe7cf107f%3A0x6847267e02528a9a!2sFerreteria%20J%26J!5e0!3m2!1ses-419!2sco!4v1611073138662!5m2!1ses-419!2sco" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </hr>

        </div>
        @extends('master')
   @section('content')
 
<div class="container">
<h1> Registro de Categorias </h1>
    <form action="{{ url('categorias/registro') }}" method="POST">
        @csrf
       
        <label for="nombreCat">Nombre Categoria </label>
        <input type="text" id='nombreCat' name='nombreCat' class="form-control" required> <br> <br>
    
        <label for="descripcionCat">Descripcion </label>
        <input type="text" id='descripcionCat' name='descripcionCat' class="form-control" required> <br> <br>
            
        <button type="submit" class="btn btn-success">Registrar </button>

    </form>
@stop
@stop