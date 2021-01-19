@extends('master')
   @section('content')
 <div >    
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID producto</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>
@stop