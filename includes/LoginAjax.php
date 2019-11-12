<?php
	include_once('../includes/database.php');
	$mensajeOk=false;
	$mensajeError='Usuario o contraseña incorrecta.';
	if(isset($_POST['Usuario'],$_POST['Contrasena'])):
		if($_POST['Usuario']!=""):
			if($_POST['Contrasena']!=""):
				$Usuario=$_POST['Usuario'];
				$Contrasena=$_POST['Contrasena'];
				$consulta=pg_query($conexion,("Select administrador.cedper,administrador.depuniadm,administrador.ofiuniadm,administrador.minorguniadm,administrador.uniuniadm,administrador.prouniadm,rol.id_rol,rol.nom_rol,personal.nombres,personal.apellido from administrador,rol,personal,sno_unidadadm 
where administrador.cedper='$Usuario' 
and clave='$Contrasena' 
and administrador.id_rol='1' 
and administrador.id_rol=rol.id_rol 
and personal.cedper=administrador.cedper
and sno_unidadadm.depuniadm=personal.depuniadm
 and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm"));
				$consulta1=pg_query($conexion,("Select administrador.cedper,administrador.depuniadm,administrador.ofiuniadm,administrador.minorguniadm,administrador.uniuniadm,administrador.prouniadm,rol.id_rol,rol.nom_rol,personal.nombres,personal.apellido from administrador,rol,personal,sno_unidadadm 
where administrador.cedper='$Usuario' 
and clave='$Contrasena' 
and administrador.id_rol='2' 
and administrador.id_rol=rol.id_rol 
and personal.cedper=administrador.cedper
and sno_unidadadm.depuniadm=personal.depuniadm
 and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm"));
				$consulta2=pg_query($conexion,("Select administrador.cedper,administrador.depuniadm,administrador.ofiuniadm,administrador.minorguniadm,administrador.uniuniadm,administrador.prouniadm,rol.id_rol,rol.nom_rol,personal.nombres,personal.apellido from administrador,rol,personal,sno_unidadadm 
where administrador.cedper='$Usuario' 
and clave='$Contrasena' 
and administrador.id_rol='3' 
and administrador.id_rol=rol.id_rol 
and personal.cedper=administrador.cedper
and sno_unidadadm.depuniadm=personal.depuniadm
 and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm "));
				$consulta3=pg_query($conexion,("Select administrador.cedper,administrador.depuniadm,administrador.ofiuniadm,administrador.minorguniadm,administrador.uniuniadm,administrador.prouniadm,rol.id_rol,rol.nom_rol,personal.nombres,personal.apellido from administrador,rol,personal,sno_unidadadm 
where administrador.cedper='$Usuario' 
and clave='$Contrasena' 
and administrador.id_rol='4' 
and administrador.id_rol=rol.id_rol 
and personal.cedper=administrador.cedper
and sno_unidadadm.depuniadm=personal.depuniadm
 and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm"));
				$consulta4=pg_query($conexion,("Select personal.cedper,personal.nombres,personal.apellido,personal.depuniadm,personal.ofiuniadm,personal.minorguniadm,personal.uniuniadm,
personal.prouniadm,personal.estatus,personal.codcar,personal.codnom
 from empleado, personal where empleado.cedper='$Usuario' and empleado.clave='$Contrasena' and personal.cedper=empleado.cedper"));
				if(pg_num_rows($consulta)>0):
					$mensajeOk=1;
					$Usua=pg_fetch_array($consulta);
					session_start();
					$_SESSION['cedper']=$Usua[0];
					$_SESSION['depuniadm']=$Usua[1];
					$_SESSION['ofiuniadm']=$Usua[2];
					$_SESSION['minorguniadm']=$Usua[3];
					$_SESSION['uniuniadm']=$Usua[4];
					$_SESSION['prouniadm']=$Usua[5];
					$_SESSION['id_rol']=$Usua[6];
					$_SESSION['nom_rol']=$Usua[7];
					$_SESSION['nombres']=$Usua[8];
					$_SESSION['apellido']=$Usua[9];
					$mensajeError='Logueado correctamente ok.';
				endif;
				if(pg_num_rows($consulta1)>0):
					$mensajeOk=2;
					$Usua=pg_fetch_array($consulta1);
					session_start();
				$_SESSION['cedper']=$Usua[0];
					$_SESSION['depuniadm']=$Usua[1];
					$_SESSION['ofiuniadm']=$Usua[2];
					$_SESSION['minorguniadm']=$Usua[3];
					$_SESSION['uniuniadm']=$Usua[4];
					$_SESSION['prouniadm']=$Usua[5];
					$_SESSION['id_rol']=$Usua[6];
					$_SESSION['nom_rol']=$Usua[7];
					$_SESSION['nombres']=$Usua[8];
					$_SESSION['apellido']=$Usua[9];
					$mensajeError='Logueado correctamente ok.';
				endif;
				if(pg_num_rows($consulta2)>0):
					$mensajeOk=3;
					$Usua=pg_fetch_array($consulta2);
					session_start();
					$_SESSION['cedper']=$Usua[0];
					$_SESSION['depuniadm']=$Usua[1];
					$_SESSION['ofiuniadm']=$Usua[2];
					$_SESSION['minorguniadm']=$Usua[3];
					$_SESSION['uniuniadm']=$Usua[4];
					$_SESSION['prouniadm']=$Usua[5];
					$_SESSION['id_rol']=$Usua[6];
					$_SESSION['nom_rol']=$Usua[7];
					$_SESSION['nombres']=$Usua[8];
					$_SESSION['apellido']=$Usua[9];
					$mensajeError='Logueado correctamente ok.';
				endif;
				if(pg_num_rows($consulta3)>0):
					$mensajeOk=4;
					$Usua=pg_fetch_array($consulta3);
					session_start();
					$_SESSION['cedper']=$Usua[0];
					$_SESSION['depuniadm']=$Usua[1];
					$_SESSION['ofiuniadm']=$Usua[2];
					$_SESSION['minorguniadm']=$Usua[3];
					$_SESSION['uniuniadm']=$Usua[4];
					$_SESSION['prouniadm']=$Usua[5];
					$_SESSION['id_rol']=$Usua[6];
					$_SESSION['nom_rol']=$Usua[7];
					$_SESSION['nombres']=$Usua[8];
					$_SESSION['apellido']=$Usua[9];
					$mensajeError='Logueado correctamente ok.';
				endif;
				if(pg_num_rows($consulta4)>0):
					$mensajeOk=5;
					$Usua=pg_fetch_array($consulta4);
					session_start();
					$_SESSION['cedper']=$Usua[0];
					$_SESSION['nombres']=$Usua[1];
					$_SESSION['apellido']=$Usua[2];
					$_SESSION['depuniadm']=$Usua[3];
					$_SESSION['ofiuniadm']=$Usua[4];
					$_SESSION['minorguniadm']=$Usua[5];
					$_SESSION['uniuniadm']=$Usua[6];
					$_SESSION['prouniadm']=$Usua[7];
					$_SESSION['estatus']=$Usua[8];
					$_SESSION['cod_car']=$Usua[9];
					$_SESSION['codnom']=$Usua[10];
					
					$mensajeError='Logueado correctamente ok.';
				endif;
			else:
				$mensajeError='Ingrese Contraseña.';
			endif;
		else:
			$mensajeError='Ingrese Usuario';
		endif;
	else:
		$mensajeError='Todos los datos son requeridos.';
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError);
	echo json_encode($salidaJson);
?>