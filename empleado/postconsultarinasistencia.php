<?php 
  ini_set("display_errors", "on");
if (isset($_POST))
{
	include_once('../includes/database.php');
	$cedula= $_POST["cedper"];
	$fecha_registrar = $_POST["email"];
	$tipo = $_POST["tipo"];
	$comentario = $_POST["comentario"];
	echo "<div class='col-sm-9'><label for='$cedula' class='col-lg-3 control-label'>Cedula:</label>
<input class='form-control' id='$cedula' type='$cedula'  placeholder='Cedula de identidad' name='$cedula' required='' value='$cedula' disabled ></div>";
echo "<div class='col-sm-9'><label for='$tipo' class='col-lg-3 control-label'>Tipo Justificacion:</label>
";
  ini_set("display_errors", "on");
  $sql = "SELECT id_tipo_justificacion, nom_justificacion
  FROM public.tipo_justificacion WHERE id_tipo_justificacion='$tipo';";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
echo"<input class='form-control' id='$tipo' type='$tipo'  placeholder='Cedula de identidad' name='$tipo' required='' value='$objFila->nom_justificacion' disabled ></div>";
  };
echo "<div class='col-sm-9'><label for='$comentario' class='col-lg-3 control-label'>Comentario:</label>
<input class='form-control' id='$comentario' type='$comentario'  placeholder='Cedula de identidad' name='$comentario' required='' value='$comentario' disabled ></div>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<div class='col-sm-9'><label for='$fecha_registrar' class='col-lg-3 control-label'>Fecha a Justificar:</label>
<input class='form-control' id='$fecha_registrar' type='$fecha_registrar'  placeholder='Cedula de identidad' name='$fecha_registrar' required='' value='$fecha_registrar' disabled ><br></div>";
echo "<br>";
echo "<br>";
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
$sql1 = "SELECT id_justificacion, comentario, fecha_creacion, id_tipo_justificacion, 
       fecha_justificar, cedper, status
  FROM public.justificacion WHERE justificacion.fecha_justificar='$id'
  and justificacion.cedper=".$_POST["cedper"]." ;
";
		$ok = true;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );
		$rs1 = pg_query( $conexion, $sql1 );
	

		if( $rs | $rs1 )
		{
			if( pg_num_rows($rs1) > 0 )
			{
				echo "
			<div class='container-fluid'>
			<div class='col-sm-9'>
  <h3><center>Este dia, ya ha sido justificado<center></h3>
<div class='well well-sm'><center>¿Desea justificar otro dia?</Center></div>
      			<center><a  href='../vista/justificar_dia_empleado.php' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_justificaciones_empleado.php' class='btn btn-danger role='button'>No</a></center></div>
</div></div>

			";
			}
			

			// Obtener el número de filas:
			else
			if( pg_num_rows($rs) > 0 )
			{
				echo "<br><br><br><br><table class='table'>
					<tr>
																				
																		 <th>Fecha</th>
																		 <th>Hora Entrada</th>
																				<th>Hora Salida</th>
														</tr>";


				// Recorrer el resource y mostrar los datos:
				while( $objFila = pg_fetch_object($rs) )

					echo " <tr> 
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
			<div class='col-sm-9'>
  <h3>No se ha encontrado Asistencia el dia ".$_POST["email"]."</h3>
<div class='well well-sm'><center>¿Desea Justificar este dia?</Center></div>
      			<center><a  href='../vista/postjustificardia_empleado.php?cedper=".$codificado = base64_encode($_POST["cedper"])."&f=".$codificado1 = base64_encode($_POST["email"])."&t=".$codificado2 = base64_encode($_POST["tipo"])."&c=".$codificado3 = base64_encode($_POST["comentario"])."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_justificaciones_empleado.php' class='btn btn-danger role='button'>No</a></center></div>
</div></div>

			";
		}
		else
			$ok = false;

		return $ok;
	}

	// Modificar la persona:
	$id = $_POST["email"];
	$cedper = $_POST["cedper"];
	$tipo = $_POST["tipo"];
	$comentario = $_POST["comentario"];
	$ok = listarAsistencia( $conexion, $id );

	