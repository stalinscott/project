
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
           <li class="active"><a href="../vista/crear_horario_talento.php"> <img src="../images/1.1.png" alt="#"/> Horario</a></li>
          <li><a href="../vista/justificar_dia_talento.php"> <img src="../images/1.2.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia_talento.php"> <img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div class="panel-heading">
        <h2  align="center">Horario</h2>
      </div>
        <ul class="nav nav-tabs">
  <li class="active"><a href="../vista/crear_horario_talento.php">Crear Horario</a></li>
  <li><a href="../vista/consultar_horario_talento.php">Consultar Horarios</a></li>
</ul>
<div id="login">        
<div class='container-fluid'>
<br>
<div class='col-sm-9'>
<label for="sno_unidadadm" class="col-sm-9 control-label">
                            Departamento a asignar:
                        </label>
            <div class="form-group">       
            <div class="col-lg-12">
                <select class="form-control"  required="required" name="sno_unidadadm" id="sno_unidadadm">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT *
  FROM public.sno_unidadadm;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->depuniadm.'-'.$objFila->ofiuniadm.'-'.$objFila->minorguniadm.'-'.$objFila->uniuniadm.'-'.$objFila->prouniadm.'">'.$objFila->desuniadm.'</option>';
  };
  ?>
  </select>
            </div>
            </div>
            <div class="form-group">
<label for="lunes" class="col-sm-9 control-label">
                            Lunes:
                        </label>
                        
                         <div class="col-sm-6">
                         Entrada:
                          <select class="form-control"  required="required" name="lunes_e" id="lunes_e">
   <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="lunes_s" id="lunes_s">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>
           <div class="form-group">
<label for="martes" class="col-sm-9 control-label">
                            Martes:
                        </label>
                         <div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="martes_e" id="martes_e">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="martes_s" id="martes_s">
   <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for="miercoles" class="col-sm-9 control-label">
                            Miercoles:
                        </label>
                         <div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="miercoles_e" id="miercoles_e">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="miercoles_s" id="miercoles_s">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for=jueves" class="col-sm-9 control-label">
                            Jueves:
                        </label>
<div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="jueves_e" id="jueves_e">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="jueves_s" id="jueves_s">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for=viernes" class="col-sm-9 control-label">
                           Viernes:
                        </label>
<div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="viernes_e" id="viernes_e">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="viernes_s" id="viernes_s">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for=sabado" class="col-sm-9 control-label">
                           Sabado:
                        </label>
<div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="sabado_e" id="sabado_e">
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="sabado_s" id="sabado_s">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for=domingo" class="col-sm-9 control-label">
                      Domingo:
                        </label>
<div class="col-sm-6">
 Entrada:
<select class="form-control"  required="required" name="domingo_e" id="domingo_e">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="domingo_s" id="domingo_s">
   <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
  };
  ?>
  </select>
  <br>
</div>
</div>

<div class="form-group">
<label for="usuario" class="col-lg-9 control-label">
                            Descripcion del horario:
                        </label>
                         <div class="col-lg-12">
<input class="form-control"  id="deshor" type="text"  placeholder="Escribir descripcion del horario" name="deshor" required="">
</div>
</div>
        <div class="col-lg-12 text-center">
        <br>
            <div class="form-group">
      <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Crear</button>
      </span>
        </div>
        </div>
            </div> 
 </div>
 </div>
 <script>


function loadLog() {
    var sno_unidadadm= document.getElementById('sno_unidadadm').value;
    var lunes_e= document.getElementById('lunes_e').value;
    var lunes_s= document.getElementById('lunes_s').value;
    var martes_e= document.getElementById('martes_e').value;
    var martes_s= document.getElementById('martes_s').value;
    var miercoles_e= document.getElementById('miercoles_e').value;
    var miercoles_s= document.getElementById('miercoles_s').value;
    var jueves_e= document.getElementById('jueves_e').value;
    var jueves_s= document.getElementById('jueves_s').value;
    var viernes_e= document.getElementById('viernes_e').value;
    var viernes_s= document.getElementById('viernes_s').value;
    var sabado_e= document.getElementById('sabado_e').value;
    var sabado_s= document.getElementById('sabado_s').value;
    var domingo_e= document.getElementById('domingo_e').value;
    var domingo_s= document.getElementById('domingo_s').value;
    var deshor= document.getElementById('deshor').value;
    if (lunes_e==0)

 {
    alert("Campo entrada lunes esta vacio ")
    document.login.lunes_e.focus()
                document.login.lunes_e.value = ""
    return 0;
  }
  if (lunes_s==0)

 {
    alert("Campo salida lunes esta vacio")
    document.login.lunes_s.focus()
                document.login.lunes_s.value = ""
    return 0;
  }
  if (martes_e==0)

 {
    alert("Campo entrada martes esta vacio ")
    document.login.martes_e.focus()
                document.login.martes_e.value = ""
    return 0;
  }
  if (martes_s==0)

 {
    alert("Campo salida martes esta vacio")
    document.login.martes_s.focus()
                document.login.martes_s.value = ""
    return 0;
  }
  if (miercoles_e==0)

 {
    alert("Campo entrada miercoles esta vacio ")
    document.login.miercoles_e.focus()
                document.login.miercoles_e.value = ""
    return 0;
  }
  if (miercoles_s==0)

 {
    alert("Campo salida miercoles esta vacio")
    document.login.miercoles_s.focus()
                document.login.miercoles_s.value = ""
    return 0;
  }
  if (jueves_e==0)

 {
    alert("Campo entrada jueves esta vacio ")
    document.login.jueves_e.focus()
                document.login.jueves_e.value = ""
    return 0;
  }
  if (jueves_s==0)

 {
    alert("Campo salida jueves esta vacio")
    document.login.jueves_s.focus()
                document.login.jueves_s.value = ""
    return 0;
  }
  if (viernes_e==0)

 {
    alert("Campo entrada viernes esta vacio ")
    document.login.viernes_e.focus()
                document.login.viernes_e.value = ""
    return 0;
  }
  if (viernes_s==0)

 {
    alert("Campo salida viernes esta vacio")
    document.login.viernes_s.focus()
                document.login.viernes_s.value = ""
    return 0;
  }
  if (sabado_e==0)

 {
    alert("Campo entrada sabado esta vacio ")
    document.login.sabado_e.focus()
                document.login.sabado_e.value = ""
    return 0;
  }
  if (sabado_s==0)

 {
    alert("Campo salida sabado esta vacio")
    document.login.sabado_s.focus()
                document.login.sabado_s.value = ""
    return 0;
  }
  if (domingo_e==0)

 {
    alert("Campo entrada domingo esta vacio ")
    document.login.domingo_e.focus()
                document.login.domingo_e.value = ""
    return 0;
  }
  if (domingo_s==0)

 {
    alert("Campo salida domingo esta vacio")
    document.login.domingo_s.focus()
                document.login.domingo_s.value = ""
    return 0;
  }
  if (deshor==0)

 {
    alert("Campo descripcion de horario esta vacio")
    document.login.deshor.focus()
                document.login.deshor.value = ""
    return 0;
  }

    
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../talento/posthorario.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("sno_unidadadm="+sno_unidadadm+"&lunes_e="+lunes_e+"&lunes_s="+lunes_s+"&martes_e="+martes_e+"&martes_s="+martes_s+"&miercoles_e="+miercoles_e+"&miercoles_s="+miercoles_s+"&jueves_e="+jueves_e+"&jueves_s="+jueves_s+"&viernes_e="+viernes_e+"&viernes_s="+viernes_s+"&sabado_e="+sabado_e+"&sabado_s="+sabado_s+"&domingo_e="+domingo_e+"&domingo_s="+domingo_s+"&deshor="+deshor+"");
}
</script>
 </div>
 
    

</body>
</html>
