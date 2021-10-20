<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Usuario;


class PlantillaController extends Controller
{
    
    public function plantillausu(){
        //metodo inicial
        return view('layouts.plantillausu');
    }
    public function plantillausuario(){
        //metodo inicial
        return view('layouts.plantillausuario');
    }
    public function plantillainicio(){
        //metodo inicial
        return view('layouts.plantillainicio');
    }
     
    public function login(){
        //metodo inicial
        return view('layouts.login');
    }

    public function cerrarsesion(){
       
        session_abort();
        session_unset();
        
        return redirect()->route('index');
        }

        public function loginme(Request $req )
        {
           $dbhost	= "localhost";	   // localhost or IP
           $dbuser	= "root";		  // database username
           $dbpass	= "";		     // database password
           $dbname	= "estacion";    // database name
           $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
           $codigo_usu = $req->input('codigo_usu');
           $contraseña_usu =$req->input('contraseña_usu');
        
           session_start();
           //contador de intentos
           if(!isset($_SESSION['contador']))
           {
               $_SESSION['contador'] = 0;
           }
           //validacion si la sesion ya fue iniciada
        
               $validacion789 = DB::table('usuario')->where(['Correo_usu'=>$codigo_usu,'Pass_usu'=>$contraseña_usu,'Estado_usu'=>1])->get();
        
                  $sql = mysqli_query($conn, "SELECT * FROM usuario WHERE Correo_usu = '$codigo_usu' AND Pass_usu = '$contraseña_usu' ");
                   $resultado = mysqli_num_rows($sql);
        
                   if(count($validacion789)>0)
                   {
                       $_SESSION['contador'] = 0;
                      $_SESSION['active'] = true;
        
        
        
                            $validacion45671 = DB::table('usuario')->where(['Correo_usu'=>$codigo_usu,'Pass_usu'=>$contraseña_usu,'Id_tipousu'=='5'])->get();
                        if(count($validacion45671)>0){
                        
                            session(['Correo_usu' => $codigo_usu]);
                            $codigo = $req->session()->get('Correo_usu');
                            return view('admin.index');
                        }else{
                        
                                session(['Correo_usu' => $codigo_usu]);
                                $codigo = $req->session()->get('Correo_usu');
                            
                            return view('usuario.index');
                            }
                    }
           
        }

        
}
