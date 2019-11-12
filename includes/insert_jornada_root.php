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
	date_default_timezone_set('America/La_Paz');
$hora= date ("g:ia");
$fecha= date ("d/m/Y");

	
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['cedula'],$_POST['fecha_jornada'],$_POST['h_entrada'],$_POST['dia'])):
	$cedula=$_POST['cedula'];
	$fecha_jornada=$_POST['fecha_jornada'];
	$h_entrada=$_POST['h_entrada'];
	$dia=$_POST['dia'];
	$consulta=pg_query($conexion,("Select cedper,fecha_jornada,h_entrada from jornada where cedper='$cedula' and fecha_jornada='$fecha_jornada'"));
		if(pg_num_rows($consulta)<1):
					$mensajeOk=1;
				$sql = "INSERT INTO public.jornada(cedper, h_entrada, fecha_jornada,dia) VALUES (".$cedula.", '".$h_entrada."','".$fecha_jornada."','".$dia."')";
				$sql1 = "INSERT INTO public.notificacion(cedper, fecha_jornada, dia,depuniadm,ofiuniadm,minorguniadm,uniuniadm,prouniadm,status,hora,descri)
    VALUES ( '".$cedula."', '".$fecha_jornada."', '".$dia."', '".$depuniadm."','".$ofiuniadm."','".$minorguniadm."','".$uniuniadm."','".$prouniadm."','no','".$h_entrada."','Ha marcado su entrada. ' )";
    pg_query( $conexion, $sql1 );
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


