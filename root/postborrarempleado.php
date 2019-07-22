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
           <li><a href="empleado_root.php"><img src="../images/1.2.png" alt="#"/> Empleado</a></li>
            <li><a href="crear_empleado.php"><img src="../images/1.2.png" alt="#"/> Crear</a></li>
            <li class="active"><a href="consultar_empleado.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div id="login"> 
  <div class="container-fluid">
<?php 
  
if (isset($_POST))
{
    
    
    

}

include_once('../includes/database.php');
 $id=$_GET["id"];
        $decodificado = base64_decode($id);
  $ok = borrarempleado( $conexion, $decodificado );
function borrarempleado( $conexion, $decodificado )
  {
   $sql = "DELETE FROM public.empleado";

    // Si 'id' es diferente de 'null' sólo se borra la persona con el 'id' especificado:
    if( $decodificado != null )
      $sql .= " WHERE cedper=".$decodificado;

    // Ejecutamos la consulta (se devolverá true o false):
    return pg_query( $conexion, $sql );
  }
  
  if( $ok == false )
    echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>Error al borrar los datos.<A HREF='../vista/consultar_horario_root.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
  else
    echo "<br><div class='panel panel-success'>
      <div class='panel-heading'>Empleado Borrado<img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
      echo "</table><br><a href='../vista/consultar_empleado.php' class='btn btn-info' role='button'>Volver</a></div> ";
