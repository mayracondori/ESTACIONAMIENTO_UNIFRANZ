<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        //metodo inicial
        return view('admin.index');
    }

    
}
