@extends('layouts.plantillausu')
@section('title','')
@section('content')

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
                       $basededatos = 'estacion';
                       $bd =mysqli_select_db ($coneccion, $basededatos);
                       $codigo = "SELECT c.Estado_condicion, c.Desc_condicion,c.Id_condiciones,c.Id_tipousu, t.Nombre_tipousu FROM condiciones_uso AS c, tipousuario AS t WHERE  c.Id_tipousu = t.id_tipousu ";
                       $resultado = mysqli_query($coneccion, $codigo);

                       while ($rest = mysqli_fetch_array($resultado)) {
                    ?>
						<tr>
							
                            <td><?php echo $rest ['Id_condiciones']; ?></td>
							<td><?php echo $rest ['Desc_condicion']; ?></td>
                            <td><?php echo $rest ['Nombre_tipousu']; ?></td>
							

                        </tr>
					<!--/Card-->
			<?php
		}
        ?>
					</tbody>
				</table>
			</div>
      </div>
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

   @endsection