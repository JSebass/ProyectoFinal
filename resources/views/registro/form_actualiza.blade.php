@extends('master2')
   @section('content')

<h1> Formulario de Actualizacion </h1>

<form action="{{route('actualizarProducto', $producto->id )}}" method= "POST">
    @csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
        <label for="idPro">ID </label>
        <input type="text" id="idbrePro" name="idPro" value="{{$producto->id}}" class="form-control" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="nombrePro">Nombre </label>
        <input type="text" id='nombrePro' name='nombrePro' value="{{$producto->nombre}}" min='1' max='1000' class="form-control" placeholder="Nombre">
    </div>

     <!-- Etiquetas de tipo number -->
     <div class="form-group">
        <label for="descripcionPro">Descripcion </label>
        <input type="text" id='descripcionPro' name='descripcionPro' value="{{$producto->descripcion}}" min='100'  class="form-control" placeholder="Descripcion">
    </div>

    <div class="form-group">
        <label for="precioPro">Valor Unidad </label>
        <input type="number" id='precioPro' name='precioPro' value="{{$producto->valor_unidad}}" min='100'  class="form-control" placeholder="Precio">
    </div>

    <div class="form-group">
        <label for="stockPro">Stock </label>
        <input type="number" id='stockPro' name='stockPro' value="{{$producto->stock}}"  class="form-control" placeholder="Stock">
    </div>

    <!-- Etiquetas de tipo Select -->
    <label for="productos">Categoria</label> 
    <select class="custom-select" id="productos" name="categorias">
        @foreach($categorias as $c)
        <option value="{{$c->id}}">{{$c->descripcion}}</option>
        @endforeach
    </select>

     
     <!-- Etiquetas de tipo Select -->
    
   
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>
@stop