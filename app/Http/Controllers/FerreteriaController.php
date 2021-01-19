<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FerreteriaController extends Controller
{
    //
    public function getIndex(){
        return view('principal');
    }
    public function showHistoria(){
        return view('nosotros.Historia');
        
    }
    public function showMision(){
        return view('nosotros.vision');
    }
    public function showUbicacion(){
        return view('nosotros.ubicacion');
    }
    public function showregistro(){
        return view('registro.registrar');
    }
}
