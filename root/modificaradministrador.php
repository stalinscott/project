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
            <li><a href="administrador_root.php"><img src="../images/1.2.png" alt="#"/> Administrador</a></li>
            <li><a href="crear_administrador.php"><img src="../images/1.2.png" alt="#"/> Crear</a></li>
            <li class="active"><a href="consultar_administrador.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
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
        <h2  align="center"> Modificar Administrador</h2>
      </div> 
      <?php    
      include_once('../includes/database.php');
      $id=$_GET["id"];
       $decodificado = base64_decode($id);
        function listarPersonas( $conexion, $decodificado)
        {
            $sql = "SELECT administrador.cedper, administrador.usuario, administrador.clave, administrador.depuniadm, administrador.ofiuniadm, administrador.minorguniadm, 
       administrador.uniuniadm, administrador.prouniadm, administrador.id_rol
  FROM public.administrador WHERE administrador.cedper='$decodificado'";
            $ok = true;
            // Ejecutar la consulta:
             $rs = pg_query( $conexion, $sql );
            if( $obj = pg_fetch_object($rs))
            {
            ?>
                            <label for="cedper" class="col-lg-3 control-label">Cedula:</label>
<input class="form-control" id="cedper" type="cedper"  placeholder="Cedula de identidad" name="cedper" required="" disabled <?php
  echo "value=".$obj->cedper.">";
                          ?>
                            <br><label for="cedper" class="col-lg-3 control-label">Usuario:</label>
<input class="form-control" id="usuario" type="text"  placeholder="Escribir usuario" name="usuario" required="" onkeypress="return validarnumeros(event)" <?php
  echo "value=".$obj->usuario.">";
                          ?>
                            <br><label for="cedper" class="col-lg-3 control-label">Contraseña:</label>
<input class="form-control" id="cla1" type="password"  placeholder="Escribir contraseña" name="cla1" required="">
                            <br><label for="cedper" class="col-lg-3 control-label">Repetir contraseña:</label>
<input class="form-control" id="cla2" type="password"  placeholder="Escribir contraseña" name="cla2" required="">
                            <br><label for="cedper" class="col-lg-3 control-label">Rol:</label>
<select class="form-control" required="required" name="id_rol" id="id_rol">
 <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_rol, nom_rol FROM public.rol WHERE id_rol!='5' AND id_rol!='6';";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->id_rol==$obj->id_rol){
  echo '<option value="'.$objFila->id_rol.'">'.$objFila->nom_rol.'';
} 

  };
  ?>
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_rol, nom_rol FROM public.rol WHERE id_rol!='5' AND id_rol!='6';";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
    if($objFila->id_rol<>$obj->id_rol){
  echo '<option value="'.$objFila->id_rol.'">'.$objFila->nom_rol.'';
} 

  };
  ?>
  </select>
        <br>
        <span >
        <center>
          <button type="submit"  class="btn btn-warning" type="button" onclick="loadLog()">Modificar</button>
          <a href='../vista/consultar_administrador.php' class='btn btn-info' role='button'>Volver</a>
          </center>
          </span>
          
      

                
            <?php	
            }
            else
                $ok = false;
            return $ok;
        }
    $ok = listarPersonas( $conexion, $decodificado );
    ?>

		

</body>
</html>
<script>


function loadLog() {
    var cedper= document.getElementById('cedper').value;
    var cla1= document.getElementById('cla1').value;
    var cla2= document.getElementById('cla2').value;
    var id_rol= document.getElementById('id_rol').value;
    if (cla1!=cla2)
 {
   alert("Contraseña debe coincidir")
    document.login.deshor.focus()
                document.login.deshor.value = ""
    return 0;
  }if (cla1==0)
 {
   alert("Campo contraseña no puede estar vacio")
    document.login.deshor.focus()
                document.login.deshor.value = ""
    return 0;
  }
  if (cla2==0)
 {
   alert("Campo repetir contraseña no puede estar vacio")
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
    xhttp.open("POST", "../root/postmodificaradministrador.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("&cedper="+cedper+"&cla1="+cla1+"&id_rol="+id_rol+"");
}
</script>
    

