@extends('layouts.plantillausuario')
@section('title','')
@section('content')


<?php
$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'estacionamiento';
$bd =mysqli_select_db ($coneccion, $basededatos);
?>
<div class="bg-gray-100 mx-auto max-w-3xl py-5 px-5 sm:px-24 shadow-xl mb-16">
<form action="{{route('completaregistro')}}" method="post" autocomplete="off">

    @csrf
      <div class="bg-white shadow-md rounded px-8 pt-5 pb-1 mb-4 flex flex-col">
        <label class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">COMPLETAR SU REGISTRASE</label>
        <div class="mx-16 md:flex mb-6">
          <div class="md:w1/2 px-3 mb-6md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
              NOMBRES
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" style="text-transform:uppercase" id="Nombre_usu" name="Nombre_usu" type="text" placeholder="Escriba sus nombres " required>
          </div>
        </div>
        <div class="mx-16 md:flex mb-6">
          <div class="md:w1/2 px-3 mb-6md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
              APELLIDO PATERNO 
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" style="text-transform:uppercase" id="App_usu" name="App_usu"  type="text" placeholder="Escriba sus apellidos" required>
          </div>
        </div>
        <div class="mx-16 md:flex mb-6">
          <div class="md:w1/2 px-3 mb-6md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
              APELLIDO MATERNO 
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" style="text-transform:uppercase" id="Apm_usu" name="Apm_usu"  type="text" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CORREO
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="Correo_usu" name="Correo_usu" type="email" placeholder="correo electronico" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CI
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-16 mb-1" id="CI_usu" name="CI_usu" type="text" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CELULAR
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="Telf_usu" name="Telf_usu" type="number" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                HORA DE ENTRADA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="HoraEntrada" name="HoraEntrada" type="time" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                HORA DE SALIDA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="HoraSalida" name="HoraSalidas" type="time" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                FECHA INICIO CONTRATO
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="FechaInicio" name="FechaInicio" type="date" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                FECHA FIN CONTRATO 
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="FechaFin" name="FechaFin" type="date" placeholder="Número de carnet" required>
            </div>
          </div>
           <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                TIPO DE USUARIO
              </label>

              <select required name="Id_tipousuario" id="Id_tipousuario">
            	<?php
                $coneccion = mysqli_connect ("localhost", "root", "" );
                $basededatos = 'estacionamiento';
                $bd =mysqli_select_db ($coneccion, $basededatos);

                  $codigo = "
                  SELECT Id_tipousu,Nombre_tipousu FROM tipo_usu WHERE Estado_tipousu";
                $resultado = mysqli_query($coneccion, $codigo);

                while ($rest = mysqli_fetch_array($resultado)) {

                ?>
            
             <option value="<?php echo $rest['Id_tipousu']?>"><?php echo $rest['Nombre_tipousu']?></option>

             <?php }
             ?>
              </select>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CONTRASEÑA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-8 mb-1" id="Pass_usu" name="Pass_usu" type="password" placeholder="Contraseña" required>
            </div>
          </div>
        <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3">
            <button type="submit" class="md:w-full bg-yellow-300 text-white hover:bg-black font-bold py-2 px-32 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
              REGISTRAR
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>




@endsection
