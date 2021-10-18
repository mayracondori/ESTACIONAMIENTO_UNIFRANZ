<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class PlantillaController extends Controller
{
    
    public function plantillaadmin(){
        //metodo inicial
        return view('layouts.plantillaadmin');
    }
    public function plantillausuario(){
        //metodo inicial
        return view('layouts.plantillausuario');
    }
    
    public function cerrarsesion(){
       
        session_abort();
        session_unset();
        
        return redirect()->route('index');
        }

}
