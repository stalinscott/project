
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
          <li><a href="../vista/justificar_dia_root.php"> <img src="../images/1.2.png" alt="#"/> Justificar</a></li>
            <li class="active"><a href="consultar_asistencia.php"> <img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
  <div class="panel-heading">
    <h2  align="center">Consultar Asistencias</h2>
  </div>
  <div id="login">        
<div class='container-fluid'>
            <div class="form-group">       
<label for="cedper" class="col-lg-3 control-label">
                            Cédula:
                        </label>
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
                   Desde:<input id="loginemail" type="text" class="tcal" name="email" required=""  onkeypress="return validarnumeros(event)">
            
                <br>Hasta: <input id="loginpassword" type="text" class="tcal" name="password" required=""  onkeypress="return validarnumeros(event)">
           
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
var clave= document.getElementById('loginpassword').value;
var cedper= document.getElementById('cedper').value;
var fecha_actual= document.getElementById('fecha_actual').value;
if (nombre==0)

 {
    alert("Campo Desde esta vacio")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
    return 0;
  }

          if (clave==0)

 {
    alert("Compo Hasta esta vacio")
    document.login.loginpassword.focus()
                document.login.loginpassword.value = ""
    return 0;
  }
            if (clave>fecha_actual)

 {
    alert("No puede visualizar fechas futuras")
    document.login.loginpassword.focus()
                document.login.loginpassword.value = ""
    return 0;
  }
              if (nombre>fecha_actual)

 {
    alert("No puede visualizar fechas futuras")
    document.login.loginpassword.focus()
                document.login.loginpassword.value = ""
    return 0;
  }
  if (nombre>clave)

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
    xhttp.open("POST", "../root/postconsultarasistencia.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+nombre+"&password="+clave+"&cedper="+cedper+"&fecha_actual="+fecha_actual+"");
}
</script>


  


   </table>
    

    </div>
    

</body>
</html>
