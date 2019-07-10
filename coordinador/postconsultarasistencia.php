<?php 

if (isset($_POST))
{
echo "Cedula: ";
echo $_POST["cedper"];
echo "        ";
echo "Desde: ";
echo $_POST["email"];
echo "        ";
echo "Hasta: ";
echo $_POST["password"];
echo "        ";
echo "<a href='../vista/consultar_asistencia_coordinador.php' class='btn btn-info' role='button'>Volver</a> ";
echo "<br>";
echo "<br>";

}
include_once('../includes/database.php');
		function listarAsistencia( $conexion, $id, $fi ){
		$sql = "SELECT jornada.fecha_jornada, jornada.cedper, jornada.h_entrada, jornada_salida.h_salida FROM jornada, jornada_salida WHERE  jornada.fecha_jornada BETWEEN '$id'
AND '$fi' AND jornada.cedper=".$_POST["cedper"]." AND jornada.cedper=jornada_salida.cedper AND jornada.fecha_jornada=jornada_salida.fecha_jornada ORDER BY jornada.fecha_jornada DESC";

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
				echo "No se encontraron Asistencias<br />";
		}
		else
			$ok = false;

		return $ok;
	}

	// Modificar la persona:
	$id = $_POST["email"];
	$fi = $_POST["password"];
	$ok = listarAsistencia( $conexion, $id, $fi );

	