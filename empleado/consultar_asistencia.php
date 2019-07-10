<?php

date_default_timezone_set('America/La_Paz');
$hora= date ("g:ia");
$fecha= date ("d/m/Y");
?>
<div class="row">
<div class="col-xs-12 text-left">
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
					<li><a href="registrar_asistencia_empleado.php"><img src="../images/1.2.png" alt="#"/> Registrar</a></li>
						<li class="active"><a href="empleado_consultar_asistencia.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
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
<input id="cedper" type="hidden"  placeholder="Escribir cedper" name="cedper" required="" value="
                  <?= $_SESSION['cedper'];?>">
<div class='container-fluid'>
<br>
<br>
<label for="cedper" class="col-lg-3 control-label">
                           Rango de Fecha:
                        </label>
<div class="col-lg-6 text-center">
 
            <div class="panel panel-default">
             <div class="panel-body">
            <div class="form-group">
                   Desde:<input id="loginemail" type="text" class="tcal" name="email" required=""  onkeypress="return validarnumeros(event)">
            </div>
             <div class="form-group">
                Hasta:
                    <input id="loginpassword" type="text" class="tcal" name="password" required=""  onkeypress="return validarnumeros(event)">
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
  if (nombre>clave)

 {
    alert("La fecha ingresada en el campo Desde es mayor que la fecha ingresada en el campo Hasta")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
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
    xhttp.open("POST", "../empleado/processpostconajax.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+nombre+"&password="+clave+"&cedper="+cedper+"");
}
</script>


	


	 </table>
		

		</div>
		

</body>
</html>
