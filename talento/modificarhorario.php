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
          <li><a href="#"> <img src="../images/1.2.png" alt="#"/> Justificar</a></li>
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
<div class="panel-heading">
        <h2  align="center"> Modificar Horario</h2>
      </div> 
      <?php
  include_once('../includes/database.php');
  $id=$_GET["id"];
  $decodificado = base64_decode($id);
      
    $ok = listarPersonas( $conexion, $decodificado);
        function listarPersonas( $conexion, $decodificado )
        {
            $sql = "SELECT id_horario, depuniadm, ofiuniadm, minorguniadm, uniuniadm, prouniadm, 
       lunes_e, lunes_s, martes_e, martes_s, miercoles_e, miercoles_s, 
       jueves_e, jueves_s, viernes_e, viernes_s, sabado_e, sabado_s, 
       domingo_e, domingo_s, deshor
  FROM public.horario WHERE horario.id_horario='$decodificado'";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
            ?>
            <div class="form-group">
<label for="lunes" class="col-sm-9 control-label">
                            Lunes:
                        </label>
                         <div class="col-sm-6">
                         Entrada:
                          <select class="form-control"  required="required" name="lunes_e" id="lunes_e">
                          <?php
  echo "<option value=".$obj->lunes_e.">".$obj->lunes_e."</option>";
                          ?>
    <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->lunes_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>

  </select>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="lunes_s" id="lunes_s">
<?php
  echo "<option value=".$obj->lunes_s.">".$obj->lunes_s."</option>";
                          ?>
      <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->lunes_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->martes_e.">".$obj->martes_e."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->martes_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="martes_s" id="martes_s">
<?php
  echo "<option value=".$obj->martes_s.">".$obj->martes_s."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->martes_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->miercoles_e.">".$obj->miercoles_e."</option>";
                          ?>
      <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->miercoles_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="miercoles_s" id="miercoles_s">
<?php
  echo "<option value=".$obj->miercoles_s.">".$obj->miercoles_s."</option>";
                          ?>
      <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->miercoles_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->jueves_e.">".$obj->jueves_e."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->jueves_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="jueves_s" id="jueves_s">
<?php
  echo "<option value=".$obj->jueves_s.">".$obj->jueves_s."</option>";
                          ?>
       <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->jueves_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->viernes_e.">".$obj->viernes_e."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->viernes_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="viernes_s" id="viernes_s">
<?php
  echo "<option value=".$obj->viernes_e.">".$obj->viernes_e."</option>";
                          ?>
       <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->viernes_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->sabado_e.">".$obj->sabado_e."</option>";
                          ?>
       <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->sabado_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="sabado_s" id="sabado_s">
<?php
  echo "<option value=".$obj->sabado_s.">".$obj->sabado_s."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->sabado_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
  echo "<option value=".$obj->domingo_e.">".$obj->domingo_e."</option>";
                          ?>
        <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->domingo_e){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
  };
  ?>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="domingo_s" id="domingo_s">
<?php
  echo "<option value=".$obj->domingo_s.">".$obj->domingo_s."</option>";
                          ?>
      <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_hora, hora
  FROM public.hora;
;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->hora<>$obj->domingo_s){
  echo '<option value="'.$objFila->hora.'">'.$objFila->hora.'</option>';
}
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
<input class="form-control"  id="deshor" type="text"  placeholder="Escribir descripcion del horario" name="deshor" <?php
  echo "value=".$obj->deshor."";
                          ?>  required="">
                          <input class="form-control"  id="id" type="hidden"  placeholder="Escribir descripcion del horario" name="id" value=<?php echo $decodificado ?> required="">
</div>
</div>
        <div class="container-fluid">
        <div class="form-group">
        <label for="lunes" class="col-sm-9 control-label">
        <span >
        <center>
        <br>
          <button type="submit"  class="btn btn-warning " type="button" onclick="loadLog()">Modificar</button>
          <a href='../vista/consultar_horario_talento.php' class='btn btn-info' role='button'>Volver</a>
          </center>
          </span>
          </label>
          </div>
          </div>
            <?php 
            }
            else
                $ok = false;
            return $ok;
        }
    ?>

            </div> 
 </div>
 </div>
    </div>
    </div>
    </div>
    

</body>
</html>
<script>


function loadLog() {
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
    var id= document.getElementById('id').value;
     if (lunes_e=="Libre")

 {
  var lunes_s = "Libre";
  }
    if (lunes_s=="Libre")

 {
    var lunes_e = "Libre";
  }

  if (martes_e=="Libre")

 {
  var martes_s= "Libre";
  }
    if (martes_s=="Libre")

 {
    var martes_e = "Libre";
  }

  if (miercoles_e=="Libre")

 {
  var miercoles_s= "Libre";
  }
    if (miercoles_s=="Libre")

 {
    var miercoles_e = "Libre";
  }
 
 if (jueves_e=="Libre")

 {
  var jueves_s= "Libre";
  }
    if (jueves_s=="Libre")

 {
    var jueves_e = "Libre";
  }

  if (jueves_e=="Libre")

 {
  var jueves_s= "Libre";
  }
    if (jueves_s=="Libre")

 {
    var jueves_e = "Libre";
  }
  if (viernes_e=="Libre")

 {
  var viernes_s= "Libre";
  }
    if (viernes_s=="Libre")

 {
    var viernes_e = "Libre";
  }
  if (sabado_e=="Libre")

 {
  var sabado_s= "Libre";
  }
    if (sabado_s=="Libre")

 {
    var sabado_e = "Libre";
  }
  if (domingo_e=="Libre")

 {
  var domingo_s= "Libre";
  }
    if (domingo_s=="Libre")

 {
    var domingo_e = "Libre";
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
    xhttp.open("POST", "../talento/postmodificarhorario.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("&lunes_e="+lunes_e+"&lunes_s="+lunes_s+"&martes_e="+martes_e+"&martes_s="+martes_s+"&miercoles_e="+miercoles_e+"&miercoles_s="+miercoles_s+"&jueves_e="+jueves_e+"&jueves_s="+jueves_s+"&viernes_e="+viernes_e+"&viernes_s="+viernes_s+"&sabado_e="+sabado_e+"&sabado_s="+sabado_s+"&domingo_e="+domingo_e+"&domingo_s="+domingo_s+"&deshor="+deshor+"&id="+id+"");
}
</script>
    

    

