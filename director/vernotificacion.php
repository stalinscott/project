
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
          <li class="active"><a href="vernotificaciones_talento.php"><img src="../images/1.1.png" alt="#"/> Notificaciones</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
 <center><h2>Notificaciones</h2></center>
  <br> <?php    
      include_once('../includes/database.php');
      $id=$_GET["id"];
       $decodificado = base64_decode($id);
        function listarPersonas( $conexion, $decodificado)
        {
            $sql = "SELECT nombres,id_notificacion, notificacion.cedper, fecha_jornada, dia, notificacion.depuniadm, notificacion.ofiuniadm, 
       notificacion.minorguniadm, notificacion.uniuniadm, notificacion.prouniadm, status,descri,hora
  FROM public.notificacion,public.personal where id_notificacion='$decodificado'
  AND personal.cedper=notificacion.cedper";
           $sql1 = "UPDATE public.notificacion
   SET status='si' where id_notificacion='$decodificado'";
            $ok = true;
            pg_query( $conexion, $sql1 );
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
            ?>
            <div class="panel panel-default">
  <div class="panel-heading"><?php
  echo "".$obj->descri."";
                          ?></div>
  <div class="panel-body"><?php
  echo "Cedula:".$obj->cedper." Nombre:".$obj->nombres." Fecha:".$obj->fecha_jornada." Dia:".$obj->dia." Hora:".$obj->hora."";
                          ?></div>
</div>
          
               <?php  
            }
            else
                $ok = false;
            return $ok;
        }
    $ok = listarPersonas( $conexion, $decodificado );
    ?>
    </div>


</body>
</html>
