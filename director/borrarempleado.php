
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
          <li ><a href="empleado.php"><img src="../images/1.2.png" alt="#"/> Empleado</a></li> 
          <li><a href="crear_empleado_director.php"><img src="../images/1.2.png" alt="#"/> Crear</a></li>
            <li class="active"><a href="consultar_empleado_director.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
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
   
    $ok = listarPersonas( $conexion, $decodificado);
        function listarPersonas( $conexion, $decodificado )
        {
            $sql = "SELECT empleado.cedper,empleado.clave,empleado.id_horario,empleado.id_rol,personal.nombres, personal.apellido
  FROM public.empleado, public.personal WHERE empleado.cedper=personal.cedper and empleado.cedper='$decodificado'";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
              echo "<div class='col-sm-9'>";
              echo"
<label for='cla1' class='col-lg-3 control-label'>
                            Cedula:
                        </label>
                         
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->cedper."' disabled>               
";
echo"
<label for='cla1' class='col-lg-3 control-label'>
                            Nombre:
                        </label>
                         
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->nombres."' disabled>               
 ";
echo"
<label for='cla1' class='col-lg-3 control-label'>
                            Apellido:
                        </label>
                        
<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='".$obj->apellido."' disabled>               
 ";
               echo "</table><br><div class='well well-sm'><center>¿Seguro desea eliminar este empleado?</Center></div>
            <center><a  href='../vista/postborrarempleado_director.php?id=".$codificado = base64_encode($obj->id_cedper)."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_empleado_director.php' class='btn btn-danger role='button'>No</a></center></div>";
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