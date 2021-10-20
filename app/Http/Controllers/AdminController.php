<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Solicitud;
use App\Models\Usuario;
use App\Models\Reserva;
use DateTime;
use DatePeriod;
use DateInterval;
use PDF;
use QrCode;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

    public function index(){
        //metodo inicial
        return view('admin.index');
    }
    public function nuevareserva(){
        //metodo inicial
        return view('admin.nuevareserva');
    }
    public function normas(){
        //metodo inicial
        return view('admin.normas');
    }
    public function mireserva(){
        //metodo inicial
        return view('admin.mireserva');
    }
    public function misreservas(){
        //metodo inicial
        return view('admin.misreservas');
    }
    public function completareserva(Request $request){
        $Horaentrada=$request->Horaentrada;
        $Horasalida=$request->Horasalida;
        $Fecha=$request->Fecha;
        $est=$request->estacion;
        
        $validacioncodigo = DB::table('reserva')->where(['HoraEntrada_reserva'=>$Horaentrada])
        ->where(['HoraSalida_reserva'=>$Horasalida])
        ->where(['Fecha_reserva'=>$Fecha])
        ->where(['Id_estacionamiento'=>$est])
        ->get();


        if(count($validacioncodigo)>0){

            //echo "Este codigo de empleado ya tiene un cuenta creada, inicie sesion en esa cuenta";
           echo"<script>
           alert('ESTE ESPACIO NO ESTÁ DIPONIBLE EN ESE HORARIO');
           </script>
          ";
          return view('admin.nuevareserva');



        }else{

        $rs = new Reserva;
        $newDate = date("Y-m-d", strtotime($Fecha));
        $rs->Fecha_reserva=$newDate;  
        $rs->HoraEntrada_reserva=$Horaentrada;
        $rs->HoraSalida_reserva=$Horasalida;
        $rs->Id_usu=1;
        $rs->Id_estacionamiento=$est;
        $hoy = date("d/m/Y-H:i:s"); 
        $contenido ="UNIFRANZ".$Horaentrada."-".$Horasalida."-".'1'."-".$Fecha."-".$hoy;
        $nom="../public/qrcodes/qrcode".'1'.".png";
        QrCode::format('png')->size(150)->generate($contenido,$nom);
        
        $rs->QR_reserva=$nom;
        

        
        $rs->save();
        return redirect()->route('admin.misreservas');
        }

    }


}