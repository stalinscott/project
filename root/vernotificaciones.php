
<div class="row">
<div class="col-xs-12 text-left">
		<br>
		</div>
</div>
		<div class="row">
		<div class="col-sm-3 text-left">
<div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
          <li class="active"><a href="vernotificaciones_root.php"><img src="../images/1.1.png" alt="#"/> Notificaciones</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
  <center><h2>Notificaciones</h2></center>
  <br>
   <?php
                    include_once('../includes/database.php');
   
    $sql = "SELECT * FROM public.notificacion, public.personal,public.sno_unidadadm 
WHERE public.personal.cedper=public.notificacion.cedper
AND sno_unidadadm.depuniadm=notificacion.depuniadm
AND sno_unidadadm.ofiuniadm=notificacion.ofiuniadm
AND sno_unidadadm.minorguniadm=notificacion.minorguniadm
AND sno_unidadadm.uniuniadm=notificacion.uniuniadm
AND sno_unidadadm.prouniadm=notificacion.prouniadm
AND notificacion.depuniadm='$depuniadm' 
AND notificacion.ofiuniadm='$ofiuniadm'
AND notificacion.minorguniadm='$minorguniadm'
AND notificacion.uniuniadm='$uniuniadm'
AND notificacion.prouniadm='$prouniadm'
AND notificacion.status='no'
;";

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );
        echo "";
        // Recorrer el resource y mostrar los datos:
        while( $data= pg_fetch_object($rs)  ){
          echo "<div class='alert alert-info alert-dismissible'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><center><a HREF='vernotificacion_root.php?id=".$codificado = base64_encode($data->id_notificacion)."'><img src='../images/10.png' alt='#'/> <strong>Fecha:</strong> ".$data->fecha_jornada." <strong>Hora:</strong> ".$data->hora." <strong>Dia:</strong> ".$data->dia." <strong>Cedula:</strong> ".$data->cedper." <br>".$data->descri."  </center> </div>  ";
      }
      echo "";
  


            ?>
    </div>


</body>
</html>
