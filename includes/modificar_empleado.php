<?php
	include_once('../includes/database.php');
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['cedper'],$_POST['cla1'],$_POST['id_rol'])):
	$cedper = $_POST["cedper"];
$cla1 = $_POST["cla1"];
$id_rol = $_POST["id_rol"];
					$mensajeOk=1;
	$sql = "UPDATE empleado SET clave='$cla1', id_rol='id_rol' WHERE cedper='$cedper'";
				return pg_query( $conexion, $sql );
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
		echo json_encode($salidaJson);
?>


