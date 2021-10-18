@extends('layouts.plantillausuario')
@section('title','')
@section('content')



<!DOCTYPE html>
<html lang="en" class="antialiased">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>USUARIOS </title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	  <!--Replace with your tailwind.css once created-->


	 <!--Regular Datatables CSS-->
	 <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	 <!--Responsive Extension Datatables CSS-->
	 <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">


   </head>

   <body class="bg-gray-100 text-gray-900 ">

<br>
      <!--Container-->
      <div class="container w-full md:w-4/5 xl:w-4/5  mx-auto px-2">

			<!--Title-->
			<h1 class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">
			LISTA DE USUARIOS
            </h1>

			<!--Card-->
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

				<table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr>
							<th data-priority="1">APELLIDOS</th>
                            <th data-priority="1">NOMBRES</th>
							<th data-priority="2">CI</th>
							<th data-priority="2">TELÉFONO</th>
							<th data-priority="3">CORREO</th>
							<th data-priority="4">TIPO DE USUARIO</th>
<th></th>
<th></th>

                          </tr>
					</thead>

					<tbody>
					<?php
$coneccion = mysqli_connect ("localhost", "root", "" );
$basededatos = 'estacionamiento';
$bd =mysqli_select_db ($coneccion, $basededatos);

  $codigo = "
  SELECT u.Estado_usu, u.Nombre_usu, u.CI_usu, u.Id_usu, u.App_usu,u.Apm_usu, u.Id_tipousuario,u.Telf_usu, u.Correo_usu, t.Nombre_tipousu FROM usuario AS u, tipo_usu AS t WHERE  u.Id_tipousuario = t.id_tipousu  ";
$resultado = mysqli_query($coneccion, $codigo);

while ($rest = mysqli_fetch_array($resultado)) {
	$estado=$rest['Estado_usu'];

?>
						<tr>
						<form method="POST" action="{{'modifpreguntas'}}">
							@csrf
							<td><?php echo $rest ['App_usu']." ".$rest ['Apm_usu']; ?></td>
                            <td><?php echo $rest ['Nombre_usu']; ?></td>
							<td><?php echo $rest ['CI_usu']; ?></td>
							<td><?php echo $rest ['Telf_usu']; ?></td>
							<td><?php echo $rest ['Correo_usu']; ?></td>
                            <td><?php echo $rest ['Nombre_tipousu']; ?></td>
							<TD><input type="hidden" name="Id_usu" value="<?php echo $rest['Id_usu']; ?>">
							</TD>

							<td ><input type="submit" name="boton" value="VER"> </td>
							<?php
							if($estado==1){
							?>
							<td style="background-color:#00ff00"></td>
							<td ><input  type="submit" name="boton" value="DESHABILITAR"> </td>

							<?php
							}else{
							?>
							<td style="background-color:#ff1a1a"></td>
							<td ><input type="submit" name="boton" value="HABILITAR"> </td>
							<?php
							}
							?>
							</form>

                        </tr>
					<!--/Card-->
			<?php
		}
        ?>
					</tbody>
				</table>
			</div>
      </div>
      <!--/container-->
	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable( {
					responsive: true
				} )
				.columns.adjust()
				.responsive.recalc();
		} );

	</script>

   </body>
</html>

@endsection
