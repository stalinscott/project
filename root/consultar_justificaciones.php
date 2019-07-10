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
      <div class="panel-heading">
        <h2  align="center">Justificar Inasistencia</h2>
      </div>
      <ul class="nav nav-tabs">
  <li ><a href="../vista/justificar_dia_root.php">Crear Justificar</a></li>
  <li class="active"><a href="../vista/consultar_justificaciones_root.php">Consultar Justificaciones</a></li>
</ul>
   <div id="login">        
<div class='container-fluid'>
<h2> Cedula:</h2>
            <div class="form-group">
                        <div class="col-lg-6">
<select class="form-control" required="required" name="cedper" id="cedper">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $fecha= date ("d/m/Y");
  $sql = "SELECT cedper, nombres, apellido FROM public.personal order by cedper asc";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->cedper.'">'.$objFila->cedper.'-'.$objFila->nombres.' '.$objFila->apellido.'</option>';
  };

  ?>
  </select>
  
</div>
</div>
        <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Consultar</button>
          </span>
            
        </div> 
        


     </div>

<script>


function loadLog() {
    var cedper= document.getElementById('cedper').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../root/postconsultarjustificaciones.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("cedper="+cedper+"");
}
</script>
     </div>
    </div>
    </div>
    

</body>
</html>