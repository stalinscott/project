<?php
						require('../includes/database.php');
session_start();
                    $cedper = $_SESSION['cedper'];
                    $usuario = $_SESSION['usuario'];
                    $depuniadm = $_SESSION['depuniadm'];
                    $ofiuniadm = $_SESSION['ofiuniadm'];
                    $minorguniadm = $_SESSION['minorguniadm'];
                    $uniuniadm = $_SESSION['uniuniadm'];
                    $prouniadm = $_SESSION['prouniadm'];

						
						$sql = "SELECT COUNT(*) from public.notificacion, public.personal,public.sno_unidadadm WHERE public.personal.cedper=public.notificacion.cedper AND
						 sno_unidadadm.depuniadm=notificacion.depuniadm
AND sno_unidadadm.ofiuniadm=notificacion.ofiuniadm
AND sno_unidadadm.minorguniadm=notificacion.minorguniadm
AND sno_unidadadm.uniuniadm=notificacion.uniuniadm
AND sno_unidadadm.prouniadm=notificacion.prouniadm
AND notificacion.depuniadm='$depuniadm' 
AND notificacion.ofiuniadm='$ofiuniadm'
AND notificacion.minorguniadm='$minorguniadm'
AND notificacion.uniuniadm='$uniuniadm'
AND notificacion.prouniadm='$prouniadm'
AND notificacion.status='no';";

  $ok = true;
  $notificaciones = pg_query( $conexion, $sql );
  while($notificaciones2 = pg_fetch_row($notificaciones)){
		echo $notificaciones2['0'];
}
						?>