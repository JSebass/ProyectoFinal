@extends('master')
   @section('content')
   
    <h1> Formulario de Registro </h1>

    <form >
        @csrf
        <!-- Etiquetas de tipo text con un value asignado -->
        <div class="form-group">
            <label for="idReg">ID </label>
            <input type="number" id="idReg" name="idReg"  class="form-control" placeholder="ID" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>

         
        

         <!-- Etiquetas de tipo number -->
         <div class="form-group">
            <label for="fechaReg">Fecha de Registro </label>
            <input type="date" id='fechaReg' name='fechaReg' min='100'  class="form-control" placeholder="Fecha de Registro">
        </div>

        <!-- Etiquetas de tipo number -->
        <div class="form-group">
                    <label for="cantidadReg">Cantidad </label>
                    <input type="number" id='cantidadReg' name='cantidadReg' min='1' max='1000' class="form-control" placeholder="Cantidad">
        </div>

        <div class="form-group">
            <label for="administradorReg">ID Administrador</label>
            <input type="number" id='administradorReg' name='administradorReg'   class="form-control" placeholder="Admin">
        </div>

        <div class="form-group">
            <label for="idproReg">ID Producto </label>
            <input type="number" id='idproReg' name='idproReg' min='100'  class="form-control" placeholder="Producto">
        </div>
        

        <br> <br>
         <!-- Etiquetas de tipo button -->
        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="button" class="btn btn-danger">Cancelar</button>
    </form>

@stop