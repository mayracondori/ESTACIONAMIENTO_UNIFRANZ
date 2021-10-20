<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;
use App\Models\departamento;
class HomeController extends Controller
{
    public function __invoke()
    {
        
        return view('index');
        //return "bienvenido";
    }
    



}