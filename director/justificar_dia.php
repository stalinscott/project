
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
          <li ><a href="asistencia_director.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
           <li><a href="../vista/crear_horario_director.php"> <img src="../images/1.2.png" alt="#"/> Horario</a></li>
          <li class="active"><a href="../vista/justificar_dia_director.php"> <img src="../images/1.1.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia_director.php"> <img src="../images/1.2.png" alt="#"/> Consultar</a></li>
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
<li class="active"><a href="../vista/justificar_dia_director.php">Crear Justificar</a></li>
  <li><a href="../vista/consultar_justificaciones_director.php">Consultar Justificaciones</a></li>
</ul>
<br>
 <div id="login">        
<div class='container-fluid'>
<div class="form-group">
            <label for="cedper" class="col-lg-3 control-label">
             Cedula:
 </label>
<div class="col-lg-6">
<select class="form-control" required="required" name="cedper" id="cedper">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $depuniadm = $_SESSION['depuniadm'];
  $ofiuniadm = $_SESSION['ofiuniadm'];
  $minorguniadm = $_SESSION['minorguniadm'];
  $uniuniadm = $_SESSION['uniuniadm'];
  $prouniadm = $_SESSION['prouniadm'];
  $sql = "SELECT * FROM public.personal where personal.depuniadm='$depuniadm' and personal.ofiuniadm='$ofiuniadm' and personal.minorguniadm='$minorguniadm' and personal.uniuniadm='$uniuniadm' and personal.prouniadm='$prouniadm';";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->cedper.'">'.$objFila->cedper.'-'.$objFila->nombres.' '.$objFila->apellido.'</option>';
  };
  ?>
  </select>
</div>
 </div>
  <br>
<div class="form-group">
<label for="tipo" class="col-lg-3 control-label">
             Tipo de justificacion:
 </label>
                   <div class="col-lg-6">
<select class="form-control" required="required" name="tipo" id="tipo">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_tipo_justificacion, nom_justificacion
  FROM public.tipo_justificacion;
";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->id_tipo_justificacion.'">'.$objFila->nom_justificacion.'</option>';
  };
  ?>
  </select>
  
</div>
 </div>
 <br>
<div class="form-group">
<label for="comentario" class="col-lg-3 control-label">
              Comentario:
 </label>
  <div class="col-lg-6">
<textarea class="form-control" rows="1" id="comentario" name="comentario" type="text" placeholder="" value=" "></textarea>
  
</div>
</div>
<br>
<br>
<div class="form-group">
<label for="cedper" class="col-lg-3 control-label">
             Dia a Justificar:
 </label>
<div class="col-lg-6 text-center">
            <div class="panel panel-default">
             <div class="panel-body">
                   <input id="loginemail" type="text" class="tcal" name="email" required=""  onkeypress="return validarnumeros(event)">
            
            </div>
             </div>
        </div>
        </div>
 <div class="col-lg-12 text-center">
            <div class="form-group">
      <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Crear</button>
      </span>
        </div>
        </div>

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
var cedper= document.getElementById('cedper').value;
var comentario= document.getElementById('comentario').value;
var tipo= document.getElementById('tipo').value;
if (nombre==0)
 {
    alert("El campo dia a justificar no posee ningun valor")
    document.login.loginemail.focus()
                document.login.loginemail.value = ""
    return 0;
  }
if (comentario==0)
 {
    alert("El campo Comentario vacio")
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
    xhttp.open("POST", "../director/postconsultarinasistencia.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("email="+nombre+"&cedper="+cedper+"&tipo="+tipo+"&comentario="+comentario+"");
}
</script>
     </div>
    </div>
    </div>

    </div>
    

</body>
</html>
