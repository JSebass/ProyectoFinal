<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Models\Categoria;


use App\Exports\CategoriasExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class Categorias extends Controller
{
    public function index(){
        // Consulta Query Builder
        //$categorias = DB::table('categorias')->get();

        // Consulta a traves de Modelos
        $categorias = Categoria::all();

        // Consultas  y manejo de Where
        //$categorias = Categoria::where('descripcion', 'like','L%')->get();
        return view('registro.Categorias.listado', ['categorias' => $categorias]);   
    }

    public function form_registro()  {
        return view('registro.Categorias.form_registro');
    }


    public function registrar(Request $request) {
        $category = new Categoria();
        $category->id = $request->input('idCat');
        $category->descripcion = $request->input('descripcionCat');
        $category->save();
        return redirect()->route('listado_categorias');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $categoria = Categoria::findOrFail($id);
        return view ('registro.Categorias.form_actualiza', compact('categoria'));
    }

    public function actualizar(Request $request, $id)
    {
        $c = Categoria::findOrFail($id);
        $c->id = $request->input('idCat');
        $c->descripcion = $request->input('descripcionCat');
        $c->save();
        return redirect()->route('listado_categorias');  
    }

    public function eliminar($id)
    {
        $c = Categoria::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_categorias');
    }

    public function descarga_Excel(){
        return Excel::download(new CategoriasExport, 'categorias.xlsx');
    }

    public function descarga_PDF(){
        $categorias = Categoria::all();
        $pdf = \PDF::loadView('registro.Categorias.reportePDF', ['categorias' => $categorias]);
        return $pdf->download('categorias.pdf');
    }

    public function recibirDatos(Request $request){
        /*
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $resultado = "Categoria: $nombre , Descripcion: $descripcion";
        */
        $category = new Categoria();
        $category->id = $request->input('idCat');
        $category->descripcion = $request->input('descripcionCat');
        if($category->save()){
            $resultado = 'Insertado';
        }
            
        return json_encode(array(
            'status' => 200,
            'response' => array(
                'mensaje' => $resultado
            )
        ));
    }

    public function enviarDatos(){
        $categorias = Categoria::all();
        return response()->json($categorias); 
    }

}
