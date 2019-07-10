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
            <li><a href="administrador_root.php"><img src="../images/1.2.png" alt="#"/> Administrador</a></li>
            <li><a href="crear_administrador.php"><img src="../images/1.2.png" alt="#"/> Crear</a></li>
            <li class="active"><a href="consultar_administrador.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
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
              $decodificado = base64_decode($id);
      $id=$_GET["id"];
      $ok = listarPersonas( $conexion, $decodificado);
        function listarPersonas( $conexion, $decodificado )
        {
            $sql = "SELECT administrador.cedper,personal.nombres,personal.apellido,sno_unidadadm.desuniadm
  FROM public.administrador,public.personal,public.sno_unidadadm 
  where administrador.cedper=personal.cedper
  and sno_unidadadm.depuniadm=administrador.depuniadm 
  and sno_unidadadm.ofiuniadm=administrador.ofiuniadm
  and sno_unidadadm.minorguniadm=administrador.minorguniadm
  and sno_unidadadm.uniuniadm=administrador.uniuniadm
  and sno_unidadadm.prouniadm=administrador.prouniadm
  and administrador.cedper='$decodificado'";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
              echo "<div class='col-sm-9'>";
              echo"Cedula:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->cedper."' disabled>";
              echo"Nombre:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->nombres."' disabled>";
              echo"Apellido:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->apellido."' disabled>";
              echo"Departamento Asignado:
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->desuniadm."' disabled>";
              echo "<br><div class='well well-sm'><center>¿Seguro desea eliminar este administrador?</Center></div>
      			<center><a  href='../vista/postborraradministrador.php?id=".$codificado = base64_encode($obj->cedper)."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_administrador.php' class='btn btn-danger role='button'>No</a></center></div>";
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


