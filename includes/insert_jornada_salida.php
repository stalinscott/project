<?php
	include_once('../includes/database.php');
	session_start();
                    $cedper = $_SESSION['cedper'];
                    $usuario = $_SESSION['usuario'];
                    $depuniadm = $_SESSION['depuniadm'];
                    $ofiuniadm = $_SESSION['ofiuniadm'];
                    $minorguniadm = $_SESSION['minorguniadm'];
                    $uniuniadm = $_SESSION['uniuniadm'];
                     $prouniadm = $_SESSION['prouniadm'];
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['cedula'],$_POST['fecha_jornada'],$_POST['h_salida'],$_POST['dia'])):
	$cedula=$_POST['cedula'];
	$fecha_jornada=$_POST['fecha_jornada'];
	$h_salida=$_POST['h_salida'];
	$dia=$_POST['dia'];
	$consulta=pg_query($conexion,("Select cedper,fecha_jornada,h_salida from jornada_salida where cedper='$cedula' and fecha_jornada='$fecha_jornada'"));
	$consulta1=pg_query($conexion,("Select cedper,fecha_jornada,h_entrada from jornada where cedper='$cedula' and fecha_jornada='$fecha_jornada'"));
	
		if(pg_num_rows($consulta1)<1):
					$mensajeOk=1;
		else:
		if(pg_num_rows($consulta)<1):
					$mensajeOk=2;
				$sql = "INSERT INTO public.jornada_salida(cedper, h_salida, fecha_jornada,dia) VALUES (".$cedula.", '".$h_salida."','".$fecha_jornada."','".$dia."')";
				$sql1 = "INSERT INTO public.notificacion(cedper, fecha_jornada, dia,depuniadm,ofiuniadm,minorguniadm,uniuniadm,prouniadm,status,hora,descri)
    VALUES ( '".$cedula."', '".$fecha_jornada."', '".$dia."', '".$depuniadm."','".$ofiuniadm."','".$minorguniadm."','".$uniuniadm."','".$prouniadm."','no','".$h_salida."','Ha marcado su salida. ' )";
    pg_query( $conexion, $sql1 );
				return pg_query( $conexion, $sql );
		endif;
		endif;
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
		echo json_encode($salidaJson);
?>


