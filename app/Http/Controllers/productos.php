<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class productos extends Controller
{
public function showprod(){
        $pro = DB::table('registro_producto')->get();
        return view('visualizar',['pro'=> $pro]);
    }
}