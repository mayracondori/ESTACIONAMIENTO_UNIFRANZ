@extends('layouts.plantillausu')
@section('title','UNIFRANZ')

@section('content')
<?php
//$codigo= session('codigo_usu');


?>
<br>
 
<?php
$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'estacionamiento';
$bd =mysqli_select_db ($coneccion, $basededatos);
?>
<div class="bg-black mx-auto max-w-3xl py-5 px-5 sm:px-24 shadow-xl mb-16">
<form action="{{route('completareserva')}}" method="post" autocomplete="off">

    @csrf
      <div class="bg-white shadow-md rounded px-8 pt-5 pb-1 mb-4 flex flex-col">
        <label class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">NUEVA RESERVA</label>
       
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                HORA DE ENTRADA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="Horaentrada" name="Horaentrada" type="time" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                HORA DE SALIDA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="Horasalida" name="Horasalida" type="time" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                FECHA  
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="Fecha" name="Fecha" type="date" placeholder="Número de carnet" required>
            </div>
          </div>
         
           <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                ESPACIOS DEL ESTACIONAMIENTO
              </label>

              <select required name="estacion" id="estacion">
            	<?php
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'estacion';
                $bd =mysqli_select_db ($coneccion, $basededatos);

                  $codigo = "
                  SELECT * FROM estacionamiento ";
                $resultado = mysqli_query($coneccion, $codigo);

                while ($rest = mysqli_fetch_array($resultado)) {

                ?>
            
             <option value="<?php echo $rest['Id_estacionamiento']?>"><?php echo $rest['Nombre']?></option>

             <?php }
             ?>
              </select>
            </div>
          </div>
         
        <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3">
            <button type="submit" class="md:w-full bg-yellow-600 text-white hover:bg-black font-bold py-2 px-32 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
              CREAR
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>





</div>
<br><br>
@endsection
