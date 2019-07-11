<?php
	include_once('../includes/database.php');
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['cedper'],$_POST['cla1'],$_POST['id_rol'])):
	$cedper = $_POST["cedper"];
$cla1 = $_POST["cla1"];
$id_rol = $_POST["id_rol"];
	$consulta=pg_query($conexion,("SELECT empleado.cedper FROM empleado WHERE empleado.cedper='$cedper'"));
		if(pg_num_rows($consulta)<1):
					$mensajeOk=1;
				$sql = "INSERT INTO public.empleado(
            cedper, id_horario, clave, id_rol)
    VALUES (".$cedper.", '0', '".$cla1."', '".$id_rol."')";
				return pg_query( $conexion, $sql );
		else:
		if(pg_num_rows($consulta)>0):
					$mensajeOk=2;
		endif;
		endif;
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
		echo json_encode($salidaJson);
?>


