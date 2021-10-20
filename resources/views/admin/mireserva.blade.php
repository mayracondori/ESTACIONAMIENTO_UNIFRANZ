@extends('layouts.plantillausu')
@section('title','')
@section('content')


<?php
//$codigo= session('codigo_usu');
$id=$_POST['Id_reserva'];
?>
<?php
$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'estacion';
$bd =mysqli_select_db ($coneccion, $basededatos);
?>
<div class="mx-auto max-w-4xl bg-black py-5 px-12 lg:px-24 shadow-xl mb-24">
    <form action="" method="POST" autocomplete="off">
@csrf
      <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

        <label class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">CONSTANCIA DE RESERVA</label>
        <img src="{{url('img/logouni.png')}}"  class="object-right-top object-scale-down h-16 w-full ">
        <table>
<tbody>
<tr>
          
  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">FECHA DE LA RESERVA:

<?php  $codigo = "
  select r.Id_reserva,r.Fecha_reserva,r.HoraSalida_reserva, r.HoraEntrada_reserva, r.QR_reserva,e.Nombre,u.Nombre_usu,u.Appat_usu,u.Apmat_usu FROM reserva as r, estacionamiento as e, usuario as u WHERE r.Id_estacionamiento= e.Id_estacionamiento and r.Id_usu=1 and r.Id_usu=u.Id_usu";
$resultado = mysqli_query($coneccion, $codigo);
while ($rest = mysqli_fetch_array($resultado)) {
    ?>
</td>
<td>
<input type="text" name="codigo" value="<?php echo $rest ['Fecha_reserva']; ?>">
</td>
</label>
  
  </tr> 
  <tr>
  <td>
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">USUARIO:
              </td>
              <td> <input type="text"  name="apellidonombre" value="<?php echo $rest['Nombre_usu']." ".$rest['Appat_usu']." ".$rest['Apmat_usu']?>">
    </td>
      </tr> 
  
  <tr>
  <td>
  <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">HORA ENTRADA:
    </label></td>
    <td> <input type="text"  name="apellidonombre" value="<?php echo $rest['HoraEntrada_reserva']?>">
    </td> 
  </tr>  
    <tr>  
    <td>
        <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">HORA SALIDA:
          </td>
          <td> <input type="text"  name="apellidonombre" value="<?php echo $rest['HoraSalida_reserva'] ?>">
    </td>

     </tr> 

  <tr>
           <td>
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="">LUGAR DE ESTACIONAMIENTO:
              </td>
              <td> <input type="text"  name="apellidonombre" value="<?php echo $rest['Nombre'] ?>">
    </td>
         <tr>
         
         <td>
          
<?php
      
      $utd="http://localhost/estacionamiento/public/qrcodes/qrcode".$rest['Id_reserva'].".png";
      ?>
      <div class="column">
       <img  style="margin: 0px 0px 0px 100px; "src="<?php echo $utd;?>">
       </div>
         </td>
         </tr>  
        <?php
    }
    ?></tr> 
    </table>
        
      </div>
    </form>
  </div>

@endsection
