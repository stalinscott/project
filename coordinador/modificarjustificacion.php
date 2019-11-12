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
          <li class="active"><a href="../vista/justificar_dia_coordinador.php"><img src="../images/1.1.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia_coordinador.php"><img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
  <div id="login"> 
  <div class="container-fluid">
<div class="col-sm-9">
<div class="panel-heading">
        <h2  align="center"> Modificar Justificacion</h2>
      </div> 
      <?php
    include_once('../includes/database.php');
     $id=$_GET["id"];
       $decodificado = base64_decode($id);
     
        function listarPersonas( $conexion, $decodificado )
        {
            $sql = "SELECT justificacion.id_justificacion ,justificacion.comentario,justificacion.fecha_creacion,justificacion.id_tipo_justificacion,
justificacion.fecha_justificar,justificacion.cedper,justificacion.status,personal.nombres,personal.apellido,
depuniadm,personal.ofiuniadm,personal.minorguniadm,personal.uniuniadm,
personal.prouniadm,personal.estatus,tipo_justificacion.nom_justificacion
  FROM public.justificacion,public.personal,public.tipo_justificacion where justificacion.cedper=personal.cedper
AND tipo_justificacion.id_tipo_justificacion=justificacion.id_tipo_justificacion
   AND
  justificacion.id_justificacion='$decodificado'";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
            ?>
<input class="form-control" id="id_justificacion" type="hidden"  placeholder="id_justificacion" name="id_justificacion" required="" disabled <?php
  echo "value=".$obj->id_justificacion.">";
                          ?>
<label for="cedper" class="col-lg-3 control-label">
                            Cedula:
                        </label>
<input class="form-control" id="cedper" type="cedper"  placeholder="Cedula de identidad" name="cedper" required="" disabled <?php
  echo "value=".$obj->cedper.">";
                          ?>


<br><label for="fecha_justificar" class="col-lg-3 control-label">
                            Fecha:
                        </label>
<input class="form-control" id="fecha_justificar" type="fecha_justificar"  placeholder="Fecha" name="fecha_justificar" required="" disabled <?php
  echo "value=".$obj->fecha_justificar.">";
                          ?>
  <br> <label for="id_tipo_justificacion" class="col-lg-6 control-label">
                            Tipo de justificacion:
                        </label>
<select class="form-control" required="required" name="id_tipo_justificacion" id="id_tipo_justificacion">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_tipo_justificacion, nom_justificacion
  FROM public.tipo_justificacion WHERE tipo_justificacion.id_tipo_justificacion='".$obj->id_tipo_justificacion."'";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->id_tipo_justificacion==$obj->id_tipo_justificacion){
  echo '<option value="'.$objFila->id_tipo_justificacion.'">'.$objFila->nom_justificacion.' ';
}
  };
  ?>
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_tipo_justificacion, nom_justificacion
  FROM public.tipo_justificacion;
";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->id_tipo_justificacion<>$obj->id_tipo_justificacion){
  echo '<option value="'.$objFila->id_tipo_justificacion.'">'.$objFila->nom_justificacion.'</option>';
}
  };
  ?>
  </select>
  <br> 
  <label for="comentario" class="col-lg-6 control-label">
                            Comentario:
                        </label>
<textarea cols="75" name="comentario" id="comentario" required="" spellcheck="true"><?php
  echo $obj->comentario;
                          ?></textarea>
   <br> <label for="id_tipo_justificacion" class="col-lg-6 control-label">
                            Aprobado:
                        </label>
<select class="form-control" required="required" name="status" id="status">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT status
  FROM public.justificacion WHERE justificacion.id_justificacion='".$obj->id_justificacion."' AND status='".$obj->status."'";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($obj->status=='Si'){
    if($objFila->status==$obj->status){
  echo '<option value="'.$objFila->status.'">'.$objFila->status.' ';
   echo '<option value="No">No';
} 
} else
  if($obj->status=='No'){
   if($objFila->status==$obj->status){
  echo '<option value="'.$objFila->status.'">'.$objFila->status.' ';
   echo '<option value="Si">Si';
} 
}
  };
  ?>
  </select>

        <br><label for="submit" class="col-sm-9 control-label">
        <span >
        <center>
          <button type="submit"  class="btn btn-warning" type="button" onclick="loadLog()">Modificar</button>
          <a href='../vista/consultar_justificaciones_coordinador.php' class='btn btn-info' role='button'>Volver</a>
          </center>
          </span>
          </label>
          </div>
          </div>

                    </div>
                    </div>

                </div>
                
            <?php 
            }
            else
                $ok = false;
            return $ok;
        }
              $id=$_GET["id"];
    $ok = listarPersonas( $conexion, $decodificado );
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
    var cedper= document.getElementById('cedper').value;
    var id_justificacion= document.getElementById('id_justificacion').value;
    var fecha_justificar= document.getElementById('fecha_justificar').value;
    var id_tipo_justificacion= document.getElementById('id_tipo_justificacion').value;
    var comentario= document.getElementById('comentario').value;
    var status= document.getElementById('status').value;

    
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../coordinador/postmodificarjustificacion.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("&cedper="+cedper+"&id_justificacion="+id_justificacion+"&fecha_justificar="+fecha_justificar+"&id_tipo_justificacion="+id_tipo_justificacion+"&comentario="+comentario+"&status="+status+"");
}
</script>
    

