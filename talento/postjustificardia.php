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
          <li ><a href="asistencia_talento.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
           <li><a href="../vista/crear_horario_talento.php"> <img src="../images/1.2.png" alt="#"/> Horario</a></li>
          <li class="active"><a href="../vista/justificar_dia_talento.php"> <img src="../images/1.1.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia_talento.php"> <img src="../images/1.2.png" alt="#"/> Consultar</a></li>
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
function justificardia($conexion, $decodificado, $decodificado2  )
  {
  $sql = "INSERT INTO public.ausencia(cedper, fecha_ausencia)
    VALUES ('$decodificado', '$decodificado2');
";
    // Ejecutamos la consulta (se devolverá true o false):
    return pg_query( $conexion, $sql );
  }
  $id=$_GET["id"];
$fecha=$_GET["fecha"];
$decodificado = base64_decode($id);
$decodificado2 = base64_decode($fecha);
  $ok = justificardia( $conexion, $decodificado, $decodificado2 );

  
