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
          <li ><a href="asistencia_root.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
           <li><a href="../vista/crear_horario.php"> <img src="../images/1.2.png" alt="#"/> Horario</a></li>
          <li class="active"><a href="../vista/justificar_dia_root.php"> <img src="../images/1.1.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia.php"> <img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div id="login"> 
  <div class="container-fluid">
<br>
      <?php
      include_once('../includes/database.php');
      $id=$_GET["id"];
              $decodificado = base64_decode($id);
      $ok = listarjustificacion( $conexion, $decodificado);
        function listarjustificacion( $conexion, $decodificado )
        {
            $sql = "SELECT justificacion.id_justificacion, justificacion.comentario, justificacion.fecha_creacion, justificacion.id_tipo_justificacion, 
       justificacion.fecha_justificar, justificacion.cedper, justificacion.status, tipo_justificacion.nom_justificacion
  FROM public.justificacion, public.tipo_justificacion WHERE justificacion.id_tipo_justificacion=tipo_justificacion.id_tipo_justificacion
  AND id_justificacion='$decodificado';";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
              echo "<div class='col-sm-9'>";
              echo"Cedula:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->cedper."' disabled>";
              echo"Fecha:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->fecha_justificar."' disabled>";
              echo"Tipo de justificacion:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->nom_justificacion."' disabled>";
              echo"Comentario:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->comentario."' disabled>";
echo"Aprobado:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->status."' disabled>";
              echo "<br><div class='well well-sm'><center>¿Seguro desea eliminar esta justificacion?</Center></div>
      			<center><a  href='../vista/postborrarjustificacion.php?id=".$codificado = base64_encode($obj->id_justificacion)."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_justificaciones_root.php' class='btn btn-danger role='button'>No</a></center></div>";
               echo "</div>";
            	}
            else
                $ok = false;
            return $ok;
        }
    
            ?>
    </div>
    </div>
		</div>
		

</body>
</html>


