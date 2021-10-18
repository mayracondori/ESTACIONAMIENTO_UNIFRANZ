
<!DOCTYPE html>
<html lang="en" class="antialiased">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>NORMAS ESTACIONAMIENTO</title>
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
			LISTA DE NORMATIVAS UNIFRANZ
            </h1>

			<!--Card-->
			 <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

				<table id="example" class=" text-center stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
					<thead>

						<tr>
							<th data-priority="1">N°</th>
							<th data-priority="2">DESCRIPCIÓN</th>
							<th data-priority="3">TIPO DE USUARIO</th>

                          </tr>
					</thead>

					<tbody>
					<?php
                       $coneccion = mysqli_connect ("localhost", "root", "" );
                       $basededatos = 'estacionamiento';
                       $bd =mysqli_select_db ($coneccion, $basededatos);
                       $codigo = "SELECT c.Estado_condicion, c.Desc_condicion,c.Id_condicion,c.Id_tipousu, t.Nombre_tipousu FROM condicion_usu AS c, tipo_usu AS t WHERE  c.Id_tipousu = t.id_tipousu  ";
                       $resultado = mysqli_query($coneccion, $codigo);

                       while ($rest = mysqli_fetch_array($resultado)) {
	                   $estado=$rest['Estado_condicion'];
                    ?>
						<tr>
						<form method="POST" action="{{'modifpreguntas'}}">
							
                            <td><?php echo $rest ['Id_condicion']; ?></td>
							<td><?php echo $rest ['Desc_condicion']; ?></td>
                            <td><?php echo $rest ['Nombre_tipousu']; ?></td>
							<td><input type="hidden" name="Id_condicion" value="<?php echo $rest['Id_condicion']; ?>">
                            </td>

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


