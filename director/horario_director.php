
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
          <li><a href="asistencia_director.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
           <li class="active"><a href="../vista/crear_horario_director.php"> <img src="../images/1.1.png" alt="#"/> Horario</a></li>
          <li><a href="../vista/justificar_dia_director.ph"> <img src="../images/1.2.png" alt="#"/> Justificar</a></li>
            <li><a href="consultar_asistencia_director.php"> <img src="../images/1.2.png" alt="#"/> Consultar</a></li>
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
  <li class="active"><a href="../vista/crear_horario_director.php">Crear Horario</a></li>
  <li><a href="../vista/consultar_horario_director.php">Consultar Horarios</a></li>
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
  <?php
  include_once('../includes/database.php');
  ini_set("display_errors", "on");
  $depuniadm = $_SESSION['depuniadm'];
  $ofiuniadm = $_SESSION['ofiuniadm'];
  $minorguniadm = $_SESSION['minorguniadm'];
  $uniuniadm = $_SESSION['uniuniadm'];
  $prouniadm = $_SESSION['prouniadm'];
  $sql = "SELECT *
  FROM public.sno_unidadadm where sno_unidadadm.depuniadm='$depuniadm' and sno_unidadadm.ofiuniadm='$ofiuniadm' and sno_unidadadm.minorguniadm='$minorguniadm' and sno_unidadadm.uniuniadm='$uniuniadm' and sno_unidadadm.prouniadm='$prouniadm'";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  while( $objFila = pg_fetch_object($rs) ){
  echo '<input class="form-control" required="required" name="sno_unidadadm" id="sno_unidadadm" type="hidden" Value="'.$objFila->depuniadm.'-'.$objFila->ofiuniadm.'-'.$objFila->minorguniadm.'-'.$objFila->uniuniadm.'-'.$objFila->prouniadm.'">';
  echo '<input class="form-control" required="required" name="sno_unidadadm1" id="sno_unidadadm1" type="text" Value="'.$objFila->desuniadm.'" placeholder="'.$objFila->desuniadm.'"" disabled>';
  };
  ?>
      </div>
      <br>
      <br>
      <br>
    </div>
            <div class="form-group">
<label for="lunes" class="col-sm-9 control-label">
                            Lunes:
                        </label>
                         <div class="col-sm-6">
                         Entrada:
                          <select class="form-control"  required="required" name="lunes_e" id="lunes_e">
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
<input class="form-control" id="deshor" type="text"  placeholder="Escribir descripcion del horario" name="deshor" required="">
</div>
</div>

        <div class="form-group">
        <label for="lunes" class="col-sm-9 control-label">
        <span >
        <br>
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Ingresar</button>
          </span>
          </label>
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
    xhttp.open("POST", "../director/posthorario.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("sno_unidadadm="+sno_unidadadm+"&lunes_e="+lunes_e+"&lunes_s="+lunes_s+"&martes_e="+martes_e+"&martes_s="+martes_s+"&miercoles_e="+miercoles_e+"&miercoles_s="+miercoles_s+"&jueves_e="+jueves_e+"&jueves_s="+jueves_s+"&viernes_e="+viernes_e+"&viernes_s="+viernes_s+"&sabado_e="+sabado_e+"&sabado_s="+sabado_s+"&domingo_e="+domingo_e+"&domingo_s="+domingo_s+"&deshor="+deshor+"");
}
</script>
 </div>
 
    

</body>
</html>
