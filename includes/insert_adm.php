<?php
	include_once('../includes/database.php');
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['cedper'],$_POST['cla1'],$_POST['id_rol'])):
	$cedper = $_POST["cedper"];
list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm) = explode('-',$_POST['sno_unidadadm']);
$cla1 = $_POST["cla1"];
$id_rol = $_POST["id_rol"];
	$consulta=pg_query($conexion,("SELECT administrador.cedper FROM administrador WHERE administrador.cedper='$cedper'"));
			$consulta2=pg_query($conexion,("SELECT administrador.cedper FROM administrador WHERE administrador.cedper='$cedper'"));
		if(pg_num_rows($consulta2)>0):
					$mensajeOk=1;
				
		else:
		if(pg_num_rows($consulta)>0):
					$mensajeOk=2;
		else:
		if(pg_num_rows($consulta)<1):
					$mensajeOk=3;
				$sql = "INSERT INTO public.administrador(cedper, depuniadm,ofiuniadm,minorguniadm,uniuniadm,prouniadm,  clave, id_rol)VALUES (".$cedper.", '".$depuniadm."','".$ofiuniadm."','".$minorguniadm."','".$uniuniadm."','".$prouniadm."','".$cla1."','".$id_rol."')";
				return pg_query( $conexion, $sql );
		endif;
		endif;
		endif;
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
		echo json_encode($salidaJson);
?>


