
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
      <div class="panel-heading">
        <h2  align="center">Justificar Inasistencia</h2>
      </div>
   <div id="login">        
<div class='container-fluid'>
            <div class="form-group">
            <input class="form-control" id="fecha" type="hidden" placeholder="<?php echo $fecha; ?> " value="<?php echo $fecha; ?> ">
            <label for="cedper" class="col-lg-3 control-label">
             Cedula:
 </label>
                   <div class="col-lg-6">
<select class="form-control" required="required" name="cedper" id="cedper">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT cedper, nombres, apellido FROM public.personal order by cedper asc";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->cedper.'">'.$objFila->cedper.'-'.$objFila->nombres.' '.$objFila->apellido.'</option>';
  };
  ?>
  </select>
  
</div>
<br>
<br>
<label for="cedper" class="col-lg-3 control-label">
             Dia a Justificar:
 </label>
<div class="col-lg-6 text-center">

            <div class="panel panel-default">
             <div class="panel-body">
            <div class="form-group">
                   <input id="loginemail" type="text" class="tcal" name="email" required=""  onkeypress="return validarnumeros(event)">
            </div>
            </div>
             </div>
            <br>
            <center>
            <div class="form-group">
      <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Consultar</button>
      </span>
        </div>
        </center>
             
        </div> 
</div>
        


  

<script language="javascript">   
function validarnumeros(e){
    key=e.keycode || e.which;
    teclado=String.fromCharCode(key);
    numero="0123456789";
    especiales="8-37-38-46";
    teclado_especial=false;

    for(var i in especiales){
        if(key==especiales[i]){
            teclado_especial=true;
        }
    }
    if(numero.indexOf(teclado)==-1 && !teclado_especial){
        return false;
    }
     
}
</script>

<script>


function loadLog() {
    var nombre= document.getElementById('loginemail').value;
var cedper= document.getElementById('cedper').value;
var fecha= document.getElementById('fecha').value;
if (nombre==0)
 {
    alert("El campo dia a justificar no posee ningun valor")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
    return 0;
  }
if (nombre<fecha)
 {
    alert("La fecha que selecciono no puede ser mayor a la fecha actual")
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
    xhttp.open("POST", "../talento/postconsultarinasistencia.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+nombre+"&cedper="+cedper+"");
}
</script>
     </div>
    </div>
    </div>
    </div>
    </div>
    

</body>
</html>
