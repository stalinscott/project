
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
          <li ><a href="asistencia_coordinador.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
          <li><a href="horario_coordinador.php"><img src="../images/1.2.png" alt="#"/> Horario</a></li>
          <li><a href="justificar_dia_coordinador.php"><img src="../images/1.2.png" alt="#"/> Justificar</a></li>
            <li class="active"><a href="consultar_asistencia_coordinador.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div class="panel-heading">
        <h2  align="center">Consultar Asistencias</h2>
        <ul class="nav nav-tabs">
        <li ><a href="../vista/consultar_asistencia_coordinador.php">Empleado</a></li>
  <li class="active"><a href="../vista/reporte_asistencias_coordinador.php">Departamento</a></li>
</ul>
<br>
   <div id="login">        
<label for="cedper" class="col-lg-3 control-label">
                           Departamento:
                        </label>
<div class="col-lg-6 text-center">
<?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $depuniadm = $_SESSION['depuniadm'];
  $ofiuniadm = $_SESSION['ofiuniadm'];
  $minorguniadm = $_SESSION['minorguniadm'];
  $uniuniadm = $_SESSION['uniuniadm'];
  $prouniadm = $_SESSION['prouniadm'];
  $sql = "SELECT *
  FROM public.sno_unidadadm where sno_unidadadm.depuniadm='$depuniadm' and sno_unidadadm.ofiuniadm='$ofiuniadm' and sno_unidadadm.minorguniadm='$minorguniadm' and sno_unidadadm.uniuniadm='$uniuniadm' and sno_unidadadm.prouniadm='$prouniadm'";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<input class="form-control" required="required" name="sno_unidadadm" id="sno_unidadadm" type="hidden" Value="'.$objFila->depuniadm.'-'.$objFila->ofiuniadm.'-'.$objFila->minorguniadm.'-'.$objFila->uniuniadm.'-'.$objFila->prouniadm.'">';
  echo '<input class="form-control" required="required" name="sno_unidadadm1" id="sno_unidadadm1" type="text" Value="'.$objFila->desuniadm.'" placeholder="'.$objFila->desuniadm.'"" disabled>';
  };
  ?>
</div>
<br>
<br>
<label for="cedper" class="col-lg-3 control-label">
                           Rango de Fecha:
                        </label>
<div class="col-lg-6 text-center">
            <?  $fecha= date ("d/m/Y");?>
            <input id="fecha_actual" type="hidden"  placeholder="fecha_actual" name="fecha_actual" required="" value="<?php echo $fecha; ?> ">
            <div class="panel panel-default">
             <div class="panel-body">
                   Desde:<input id="desde" type="text" class="tcal" name="email" required=""  onkeypress="return validarnumeros(event)">
            
                <br>Hasta: <input id="hasta" type="text" class="tcal" name="password" required=""  onkeypress="return validarnumeros(event)">
           
            </div>
             </div>
            <br>
            <center>
  
      <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Consultar</button>
      </span>
        </center>
             
        </div>  
        </div>
        </div>     

<script>


function loadLog() {
    var sno_unidadadm= document.getElementById('sno_unidadadm').value;
    var desde= document.getElementById('desde').value;
    var hasta= document.getElementById('hasta').value;
     var fecha_actual= document.getElementById('fecha_actual').value;
    if (desde==0)

 {
    alert("Campo Desde esta vacio")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
    return 0;
  }

          if (hasta==0)

 {
    alert("Compo Hasta esta vacio")
    document.login.loginpassword.focus()
                document.login.loginpassword.value = ""
    return 0;
  }

  if (desde>hasta)

 {
    alert("La fecha ingresada en el campo Desde es mayor que la fecha ingresada en el campo Hasta")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
    return 0;
  }

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../coordinador/postreporteasistencia.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("sno_unidadadm="+sno_unidadadm+"&fecha_actual="+fecha_actual+"&desde="+desde+"&hasta="+hasta+"");
}
</script>
     </div>
    </div>
    </div>
    

</body>
</html>
