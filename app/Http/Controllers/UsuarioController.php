<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Usuario;
use App\Models\departamento;
use DateTime;
use DatePeriod;
use DateInterval;
use PDF;
use QrCode;
use Illuminate\Support\Facades\DB;
class UsuarioController extends Controller
{

    public function index(){
        //metodo inicial
        return view('usuario.index');
    }

    public function listausuarios(){
        // metodo mostrar algo especifico
        return view('usuario.listausuarios');


    }
    public function listahorarios(){
        // metodo mostrar algo especifico
        return view('usuario.listahorarios');


    }
    public function registro(){
        //metodo inicial
        return view('usuario.registro');
    }
    public function completaregistro(Request $request){
        $Correo_usu=$request->Correo_usu;
        $validacioncodigo = DB::table('usuario')->where(['Correo_usu'=>$Correo_usu])->get();


        if(count($validacioncodigo)>0){

            //echo "Este codigo de empleado ya tiene un cuenta creada, inicie sesion en esa cuenta";
           echo"<script>
           alert('EL CORREO YA SE ENCUENTRA REGISTRADO');
           </script>
          ";
          return view('usuario.index');



        }else{

        $usuario = new Usuario;
        $usuario->Nombre_usu =strtoupper($request->Nombre_usu);
        $usuario->App_usu=strtoupper($request->App_usu);
        $usuario->Apm_usu=strtoupper($request->Apm_usu);
        $usuario->CI_usu=$request->CI_usu;
        $usuario->Telf_usu=$request->Telf_usu;
        $usuario->Correo_usu=$request->Correo_usu;
        $usuario->Pass_usu=$request->Pass_usu;
        $usuario->Estado_usu=1;
        $usuario->HoraEntrada_usu=$request->HoraEntrada;
        $usuario->HoraSalida_usu=$request->HoraSalida;
        $usuario->Id_tipousuario=$request->Id_tipousuario;
        $usuario->Id_codigoqr=1;
        
        $newDate = date("Y-m-d", strtotime($request->FechaInicio));
        $usuario->FechaInicio_usu=$newDate;  
        $newDate2 = date("Y-m-d", strtotime($request->FechaFin));
        $usuario->FechaFin_usu=$newDate2;  

        
        $usuario->save();
        return redirect()->route('usuario.index');
        }

    }
    public function modifpreguntas(Request $request){
        if($request->boton=="HABILITAR"){
            $estado =1;
        }else{
               $estado=0;
             }

          $id=$request->Id_usu;
          Usuario::where('Id_usu', $id)
        ->update(['Estado_usu' => $estado]);
        return redirect()->route('usuario.usuarios');


    }

}
