<?php 
  
if (isset($_POST))
{
   echo "<br><br><br><div class='panel panel-success'>
      <div class='panel-heading'>Justificacion modificada<img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
    echo "</table><br><a href='../vista/consultar_justificaciones_coordinador.php' class='btn btn-info' role='button'>Volver</a></div>
    ";
}
include_once('../includes/database.php');
$cedper = $_POST["cedper"];
	$id_justificacion = $_POST["id_justificacion"];
	$fecha_justificar = $_POST["fecha_justificar"];
	$id_tipo_justificacion = $_POST["id_tipo_justificacion"];
	$comentario = $_POST["comentario"];
	$status = $_POST["status"];
	
	$ok = modificarjustificacion( $conexion, $cedper, $id_justificacion, $fecha_justificar, $id_tipo_justificacion, $comentario, $status );

function modificarjustificacion(  $conexion, $cedper, $id_justificacion, $fecha_justificar, $id_tipo_justificacion, $comentario, $status  )
	{
    
    $sql = "UPDATE public.justificacion
   SET comentario='$comentario', fecha_creacion='$fecha_creacion', id_tipo_justificacion='$id_tipo_justificacion', 
       fecha_justificar='$fecha_justificar', cedper='$cedper', status='$status'
 WHERE id_justificacion='$id_justificacion';
";

		// Ejecutamos la consulta (se devolverá true o false):
		return pg_query( $conexion, $sql );
	}
	