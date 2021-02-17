@extends('master')
   @section('content')
   
    <h1> Registro Producto </h1>

    <form action="{{route('registrarProducto')}}" method= "POST">
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="idPro">ID </label>
            <input type="text" id="idPro" name="idPro"  class="form-control" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

         
        

         
         <div class="form-group">
            <label for="nombrePro">Nombre </label>
            <input type="text" id='nombrePro' name='nombrePro' min='1' max='1000'  class="form-control" placeholder="Nombre">
        </div>

        
        <div class="form-group">
                    <label for="descripcionPro">Descripcion </label>
                    <input type="text" id='descripcionPro' name='descripcionPro' min='1' max='1000' class="form-control" placeholder="Descripcion">
        </div>

        <div class="form-group">
            <label for="precioPro">Valor Unidad</label>
            <input type="number" id='precioPro' name='precioPro'   class="form-control" placeholder="Valor Unidad">
        </div>

        <div class="form-group">
            <label for="stockPro">Stock </label>
            <input type="number" id='stockPro' name='stockPro'   class="form-control" placeholder="Stock">
        </div>

        <label for="productos">Productos</label> 
        <select class="custom-select" id="productos" name="categorias">
            @foreach($categorias as $c)
            <option value="{{$c->id}}">{{$c->descripcion}}</option>
            @endforeach
        </select>

        <br> <br>
         <!-- Etiquetas de tipo button -->
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </form>
    @stop