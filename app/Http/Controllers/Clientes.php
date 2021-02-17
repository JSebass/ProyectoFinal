<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;


class Clientes extends Controller
{
    public function index(){
        // Consultar clientes con Eloquent
        $clientes = Cliente::all();   
        return view('clientes.listado',['clientes' => $clientes] );
    }

    public function form_registro()  {
        return view('clientes.form_registro');
    }


    public function registrar(Request $request) {
        $cliente = new Cliente();
        $cliente->id = $request->input('idCli');
        $cliente->cedula = $request->input('cedulaCli');
        $cliente->nombre = $request->input('nombreCli');
        $cliente->apellidos = $request->input('apellidosCli');
        $cliente->correo = $request->input('correoCli');
        $cliente->contraseña = $request->input('contraseñaCli');
        $cliente->genero = $request->input('genero');
        $cliente->saldo = $request->input('saldoCli');
        $cliente->save();
        return redirect()->route('listado_clientes');
    }

    public function form_actualiza($id){
        // Funcion que genera el formulario de actualizacion con base en la categoria seleccionada
        $cliente = Cliente::findOrFail($id);
        return view ('clientes.form_actualiza', compact('cliente'));
    }

    public function actualizar(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->cedula = $request->input('cedulaCli');
        $cliente->nombre = $request->input('nombreCli');
        $cliente->apellidos = $request->input('apellidosCli');
        $cliente->correo = $request->input('correoCli');
        $cliente->contraseña = $request->input('contraseñaCli');
        $cliente->genero = $request->input('genero');
        $cliente->saldo = $request->input('saldoCli');
        $cliente->save();
        return redirect()->route('listado_clientes');  
    }

    public function eliminar($id)
    {
        $c = Cliente::findOrFail($id);
        $c->delete();
        return redirect()->route('listado_clientes');
    }
}
