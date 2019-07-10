
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
            <li><a href="administrador_talento.php"><img src="../images/1.2.png" alt="#"/> Administrador</a></li>
            <li class="active"><a href="crear_admi_talento.php"><img src="../images/1.1.png" alt="#"/> Crear</a></li>
            <li><a href="consultar_administrador_talento.php"><img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
      <div class="panel-heading">
    <h2  align="center">Crear Administrador</h2>
  </div>
    <div class="panel-body">
        <div class="media">
            <div class="media-body">
                <form class="form-horizontal"  action="" name="f1" method="post" onsubmit="return validar_registro()">
                  <div class="form-group">       
<label for="cedper" class="col-lg-3 control-label">
                            Cédula:
                        </label>
                   <div class="col-lg-6">
<select class="form-control" required="required" name="cedper" id="cedper">
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $sql = "SELECT cedper, nombres, apellido FROM public.personal;";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->cedper.'">'.$objFila->cedper.'-'.$objFila->nombres.' '.$objFila->apellido.'</option>';
  };
  ?>
  </select>
</div>
</div> 
<div class="form-group">
<label for="sno_unidadadm" class="col-lg-3 control-label">
                            Departamento a asignar:
                        </label>
                        <div class="col-lg-6">
<select class="form-control" required="required" name="sno_unidadadm" id="sno_unidadadm">
  <?php
  include_once('../includes/conexion.php');
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
<label for="usuario" class="col-lg-3 control-label">
                            Usuario:
                        </label>
                         <div class="col-lg-6">
<input class="form-control" id="usuario" type="text"  placeholder="Escribir usuario" name="usuario" required="" onkeypress="return validarnumeros(event)">
</div>
</div>
<div class="form-group">
<label for="cla1" class="col-lg-3 control-label">
                            Contraseña:
                        </label>
                         <div class="col-lg-6">
<input class="form-control" id="cla1" type="password"  placeholder="Escribir contraseña" name="cla1" required="">
</div>
</div>
<div class="form-group">
<label for="cla2" class="col-lg-3 control-label">
                            Repetir contraseña:
                        </label>
                         <div class="col-lg-6">
<input class="form-control" id="cla2" type="password"  placeholder="Escribir contraseña" name="cla2" required="">
</div>
</div>
<div class="form-group">       
<label for="id_rol" class="col-lg-3 control-label">
                            Rol:
                        </label>
                   <div class="col-lg-6">
<select class="form-control" required="required" name="id_rol" id="id_rol">
  <?php
  include_once('../includes/conexion.php');
  ini_set("display_errors", "on");
  $sql = "SELECT id_rol, nom_rol FROM public.rol WHERE rol.id_rol!='1' AND rol.id_rol!='2' AND rol.id_rol!='6' AND rol.id_rol!='5';";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<option value="'.$objFila->id_rol.'">'.$objFila->nom_rol.' ';
  };
  ?>
  </select>
</div>
</div>
                    <center>
                <br>
                <button type = "button" class="btn btn-primary" id="Iniciar">Registrar
                </button>
            </center>
        </form>

                                                            
        

                    </div>
                    </div>
                </div>
    </div>
        </div>
        

</body>
</html>

