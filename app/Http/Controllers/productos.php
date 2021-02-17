<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class productos extends Controller
{
public function index(){

    $productos = DB::table('productos as pro')
    ->join('categorias as cat', 'pro.categoria', '=', 'cat.id')
    ->select('pro.id','pro.nombre', 'pro.valor_unidad', 'cat.descripcion')
   ->get();
return view('registro.productos', ['productos' => $productos]);
}
public function detalle($id) {
    $producto = Producto:: findOrFail($id);
    return view('registro.detalle', compact('producto'));

}

public function formularioReg(){
    $categorias = Categoria::all();
    return view('registro.form_registro', compact('categorias'));


}

    public function registrar(Request $request){
        $producto = new Producto();
        $producto->id = $request->input('idPro');
        $producto->nombre = $request->input('nombrePro');
        $producto->descripcion = $request->input('descripcionPro');
        $producto->valor_unidad = $request->input('precioPro');
        $producto->stock = $request->input('stockPro');
        $producto->categoria = $request->input('categorias');
        $producto->save();
        return redirect()->route('listadoProductos');
        
    }
    
    public function eliminar($id){
        $product = Producto::findOrFail($id);
        $product->delete();
        return redirect()->route('listadoProductos');
    }



    public function formularioAct($id){
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('registro.form_actualiza', compact('producto','categorias'));
    }

    public function actualizar(Request $request, $id){
        // Realizar la actualizacion en la base de datos
        $product = Producto::findOrFail($id);
        $product->id = $request->input('idPro');
        $product->nombre = $request->input('nombrePro');
        $product->descripcion = $request->input('descripcionPro');
        $product->valor_unidad = $request->input('precioPro');   
        $product->stock = $request->input('stockPro'); 
        $product->categoria = $request->input('categorias');
        $product->save();
        return redirect()->route('listadoProductos');
    }
    


    public function form_consulta(){
        return view('registro.form_consulta');
     }
 
     public function consultar(Request $request){
        $nombre = $request->input('idPro');
        $producto = Producto::where('id', 'like',$nombre)->first();
        if($producto)
             return view('registro.resultado', compact('producto'));
         else
             return view('registro.mensaje');
 
     }

}