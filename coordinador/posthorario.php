<?php 
ini_set("display_errors", "on");
if (isset($_POST))
{
               
}
include_once('../includes/database.php');
		function listarHorario( $conexion, $horario ){
		$sql = "SELECT *
  		FROM public.horario WHERE public.horario.id_horario='$horario'";

		$ok = true;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );

		if( $rs )
		{
			// Obtener el número de filas:
			if( pg_num_rows($rs) > 0 )
      {
        echo "<table class='table'><tr>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                     <th>Miercoles</th>
                                     <th>Jueves</th>
                                     <th>Viernes</th>
                                     <th>Sabado</th>
                                     <th>Domingo</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo "<h2> Horario: ".$objFila->deshor." </h2>
      			<br> 
      			<tr>
                <td>Entrada:".$objFila->lunes_e." Salida:".$objFila->lunes_s."</td>
               <td>Entrada:".$objFila->martes_e." Salida:".$objFila->martes_s."</td>
               <td>Entrada:".$objFila->miercoles_e." Salida:".$objFila->miercoles_s."</td>
               <td>Entrada:".$objFila->jueves_e." Salida:".$objFila->jueves_s."</td>
               <td>Entrada:".$objFila->viernes_e." Salida:".$objFila->viernes_s."</td>
               <td>Entrada:".$objFila->sabado_e." Salida:".$objFila->sabado_s."</td>
               <td>Entrada:".$objFila->domingo_e." Salida:".$objFila->domingo_s."</td>
               </tr>
               </table>";
               echo "<br><a href='../vista/horario_coordinador.php' class='btn btn-info' role='button'>Volver</a> ";
      }
			else
				echo "No se encontraro horario<br />";
		}
		else
			$ok = false;

		return $ok;
	}

	// Modificar la persona:
	$horario = $_POST["horario"];
	$ok = listarHorario( $conexion, $horario );

	