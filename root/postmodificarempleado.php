<?php 
  
if (isset($_POST))
{
   echo "<br><br><br><div class='panel panel-success'>
      <div class='panel-heading'>Empleado Modificado<img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
    echo "</table><br><a href='../vista/consultar_empleado.php' class='btn btn-info' role='button'>Volver</a></div>
    ";
}
include_once('../includes/database.php');
function modificarempleado(  $conexion, $cedper, $cla1, $id_rol )
	{
    
    $sql = "UPDATE empleado SET clave='$cla1', id_rol='$id_rol' WHERE cedper='$cedper'";

		// Ejecutamos la consulta (se devolverá true o false):
		return pg_query( $conexion, $sql );
	}
	$cedper = $_POST["cedper"];
	$cla1 = $_POST["cla1"];
	$id_rol = $_POST["id_rol"];
	
	$ok = modificarempleado( $conexion, $cedper, $cla1, $id_rol );
