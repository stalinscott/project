<?php 

if (isset($_POST))
{
echo "Cedula: ";
echo $_POST["cedper"];
echo "        ";
echo "Desde: ";
echo $_POST["email"];
echo "        ";
echo "<a href='../vista/justificar_dia_director.php' class='btn btn-info' role='button'>Volver</a> ";
echo "<br>";
echo "<br>";

}
include_once('../includes/database.php');
		function listarAsistencia( $conexion, $id ){
		$sql = "SELECT *
  FROM public.jornada,public.jornada_salida 
  WHERE jornada.cedper=jornada_salida.cedper
  AND jornada.cedper=".$_POST["cedper"]."
  AND jornada.fecha_jornada=jornada_salida.fecha_jornada
  AND jornada.fecha_jornada='$id';
";

		$ok = true;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Obtener el número de filas:
			if( pg_num_rows($rs) > 0 )
			{
				echo "<table class='table'>
					<tr>
																				<th>Cedula</th>
																		 <th>Fecha</th>
																		 <th>Hora Entrada</th>
																				<th>Hora Salida</th>
														</tr>";


				// Recorrer el resource y mostrar los datos:
				while( $objFila = pg_fetch_object($rs) )

					echo " <tr> <td> ".$objFila->cedper." </td>
               <td> ".$objFila->fecha_jornada."
               </td>
               <td>".$objFila->h_entrada."
               </td>
               <td> ".$objFila->h_salida."
               </td></tr>";
			}
			else

				echo "
			<div class='container-fluid'>
  <h3>No se ha encontrado Asistencia el dia ".$_POST["email"]."</h3>
<div class='well well-sm'><center>¿Desea Justificar este dia?</Center></div>
      			<center><a  href='../vista/postjustificardia_director.php?id=".$codificado = base64_encode($_POST["cedper"])."?fecha=".$codificado2 = base64_encode($_POST["email"])."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/justificar_dia_director.php' class='btn btn-danger role='button'>No</a></center></div>
</div>

			";
		}
		else
			$ok = false;

		return $ok;
	}

	// Modificar la persona:
	$id = $_POST["email"];
	$ok = listarAsistencia( $conexion, $id );

	