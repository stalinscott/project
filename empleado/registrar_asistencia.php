<?php

date_default_timezone_set('America/La_Paz');
$hora= date ("g:ia");
$fecha= date ("d/m/Y");
$dia= date ("N");

?>
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
          <li><a href="asistencia_empleado.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
          <li><a href="justificar_dia_empleado.php"><img src="../images/1.2.png" alt="#"/> Justificar</a></li>
          <li  class="active"><a href="registrar_asistencia_empleado.php"><img src="../images/1.1.png" alt="#"/> Registrar</a></li>
            <li><a href="empleado_consultar_asistencia.php"><img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div class="panel-heading">
        <h2  align="center">Registrar Asistencia </h2>
        <ul class="nav nav-tabs">
  <li class="active"><a href="registrar_asistencia_empleado.php">Entrada</a></li>
  <li><a href="registrar_asistencia_empleado2.php">Salida</a></li>
</ul>
    </div>
    <div class="panel-body">
        <div class="media">
            <div class="media-body">
                <form class="form-horizontal"  action="" name="f1" method="post">
                  <div class="form-group">
                  <input type="hidden"  required="required" name="cedula" id="cedula" value="
                  <?= $_SESSION['cedper'];?>"/>
    <label for="disabledInput" class="col-sm-3 control-label">Fecha:</label>
    <div class="col-sm-6">
      <input class="form-control" id="fecha_jornada" type="text" placeholder="<?php echo $fecha; ?> " value="<?php echo $fecha; ?> " disabled>
    </div>
  </div>
  <div class="form-group">
    <label for="disabledInput" class="col-sm-3 control-label">Hora:</label>
    <div class="col-sm-6">
      <input class="form-control" id="h_entrada" type="text" placeholder="<?php echo $hora; ?> " value="<?php echo $hora; ?> " disabled>
    </div>
  </div>
    <div class="col-sm-6">
      <input class="form-control" id="dia" type="hidden" placeholder="<?php echo $dia; ?> " value="<?php echo $dia; ?> " disabled>
    </div>
 
                    <center>
                <br>
                <button type = "button" class="btn btn-primary" id="Iniciar">Registrar
                </button>
            </center>
        </form>

                                                            
        

                    </div>
                    </div>
                </div>
    </div>






    </div>
		</div>
		

</body>
</html>