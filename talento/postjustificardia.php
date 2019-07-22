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
<br>
<div class="col-sm-9">

<?php 
  
if (isset($_GET))
{
  include_once('../includes/database.php');
function insertarHorario( $conexion, $decodificado, $decodificado1, $decodificado2, $decodificado3, $fecha)
  {
    
    $sql = "INSERT INTO public.justificacion(comentario, fecha_creacion, id_tipo_justificacion, fecha_justificar, cedper, status)
    VALUES ('$decodificado3', '$fecha', '$decodificado2', '$decodificado1', '$decodificado' , 'Si');";

    // Ejecutamos la consulta (se devolverá true o false):
    return pg_query( $conexion, $sql );
  }
              $cedper=$_GET["cedper"];
$t=$_GET["t"];
$f=$_GET["f"];
$c=$_GET["c"];
$decodificado = base64_decode($cedper);
$decodificado1 = base64_decode($f);
$decodificado2 = base64_decode($t);
$decodificado3 = base64_decode($c);
  
   $ok = insertarHorario( $conexion, $decodificado, $decodificado1, $decodificado2, $decodificado3, $fecha );

    echo "<br><div class='panel panel-success'>
      <div class='panel-heading'>Ha justificado el dia con exito.<img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
echo "</table><a href='../vista/justificar_dia_talento.php' class='btn btn-info' role='button'>Volver</a></div>";
}

