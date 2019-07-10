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
  echo "<option value=".$obj->lunes_e.">".$obj->lunes_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>

  </select>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="lunes_s" id="lunes_s">
<?php
  echo "<option value=".$obj->lunes_s.">".$obj->lunes_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->martes_e.">".$obj->martes_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="martes_s" id="martes_s">
<?php
  echo "<option value=".$obj->martes_s.">".$obj->martes_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->miercoles_e.">".$obj->miercoles_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="miercoles_s" id="miercoles_s">
<?php
  echo "<option value=".$obj->miercoles_s.">".$obj->miercoles_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->jueves_e.">".$obj->jueves_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="jueves_s" id="jueves_s">
<?php
  echo "<option value=".$obj->jueves_s.">".$obj->jueves_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->viernes_e.">".$obj->viernes_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
 <div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="viernes_s" id="viernes_s">
<?php
  echo "<option value=".$obj->viernes_e.">".$obj->viernes_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->sabado_e.">".$obj->sabado_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="sabado_s" id="sabado_s">
<?php
  echo "<option value=".$obj->sabado_s.">".$obj->sabado_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
  echo "<option value=".$obj->domingo_e.">".$obj->domingo_e."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
  </select>
  <br>
</div>
<div class="col-sm-6">
 Salida:
<select class="form-control"  required="required" name="domingo_s" id="domingo_s">
<?php
  echo "<option value=".$obj->domingo_s.">".$obj->domingo_s."-Dato Actual</option>";
                          ?>
  <option value="Libre">Libre</option>
  <option value="1:00am">1:00 AM</option>
  <option value="1:30am">1:30 AM</option>
  <option value="2:00am">2:00 AM</option>
  <option value="2:30am">2:30 AM</option>
  <option value="3:00am">3:00 AM</option>
  <option value="3:30am">3:30 AM</option>
  <option value="4:00am">4:00 AM</option>
  <option value="4:30am">4:30 AM</option>
  <option value="5:00am">5:00 AM</option>
  <option value="5:30am">5:30 AM</option>
  <option value="6:00am">6:00 AM</option>
  <option value="6:30am">6:30 AM</option>
  <option value="7:00am">7:00 AM</option>
  <option value="7:30am">7:30 AM</option>
  <option value="8:00am">8:00 AM</option>
  <option value="8:30am">8:30 AM</option>
  <option value="9:00am">9:00 AM</option>
  <option value="9:30am">9:30 AM</option>
  <option value="10:00am">10:00 AM</option>
  <option value="10:30am">10:30 AM</option>
  <option value="11:00am">11:00 AM</option>
  <option value="11:30am">11:30 AM</option>
  <option value="12:00pm">12:00 PM</option>
  <option value="12:30pm">12:30 PM</option>
  <option value="1:00pm">1:00 PM</option>
  <option value="1:30pm">1:30 PM</option>
  <option value="2:00pm">2:00 PM</option>
  <option value="2:30pm">2:30 PM</option>
  <option value="3:00pm">3:00 PM</option>
  <option value="3:30pm">3:30 PM</option>
  <option value="4:00pm">4:00 PM</option>
  <option value="4:30pm">4:30 PM</option>
  <option value="5:00pm">5:00 PM</option>
  <option value="5:30pm">5:30 PM</option>
  <option value="6:00pm">6:00 PM</option>
  <option value="6:30pm">6:30 PM</option>
  <option value="7:00pm">7:00 PM</option>
  <option value="7:30pm">7:30 PM</option>
  <option value="8:00pm">8:00 PM</option>
  <option value="8:30pm">8:30 PM</option>
  <option value="9:00pm">9:00 PM</option>
  <option value="9:30pm">9:30 PM</option>
  <option value="10:00pm">10:00 PM</option>
  <option value="10:30pm">10:30 PM</option>
  <option value="11:00pm">11:00 PM</option>
  <option value="11:30pm">11:30 PM</option>
  <option value="12:00am">12:00 AM</option>
  <option value="12:30am">12:30 AM</option>
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
                          <input class="form-control"  id="id" type="hidden"  placeholder="Escribir descripcion del horario" name="id" value=<?php echo $id ?> required="">
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
    

