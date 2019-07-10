
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
          <li ><a href="asistencia_administrador.php"><img src="../images/1.2.png" alt="#"/> Asistencia</a></li>
          <li class="active"><a href="horario_administrador.php"><img src="../images/1.1.png" alt="#"/> Horario</a></li>
          <li><a href="#"><img src="../images/1.2.png" alt="#"/> Justificar</a></li>
            <li><a href="#"><img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
    <h2  align="center">Consultar Horarios</h2>
  <br>
   <div id="login">        
<div class='container-fluid'>
<div class='col-sm-9'>
<h2> Horario:</h2>
            <div class="form-group">       
            <div class="col-lg-6">
                <select class="form-control" required="required" name="horario" id="horario">
                 <?php
                  include_once('../includes/conexion.php');
                  ini_set("display_errors", "on");
                  $depuniadm = $_SESSION['depuniadm'];
                    $ofiuniadm = $_SESSION['ofiuniadm'];
                    $minorguniadm = $_SESSION['minorguniadm'];
                    $uniuniadm = $_SESSION['uniuniadm'];
                    $prouniadm = $_SESSION['prouniadm'];
                  $sql = "SELECT * FROM public.horario WHERE horario.depuniadm='$depuniadm' and horario.ofiuniadm='$ofiuniadm' and horario.minorguniadm='$minorguniadm' and horario.uniuniadm='$uniuniadm' and horario.prouniadm='$prouniadm'";
                  $ok = true;
                  $rs = pg_query( $conexion, $sql );
                  while( $objFila = pg_fetch_object($rs) ){
                  echo '<option value="'.$objFila->id_horario.'">'.$objFila->deshor.'</option>';
                  };
                  ?>
                </select>
            </div>
            </div>
        <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Consultar</button>
          </span>
            </div>
        </div> 
      


     </div>

<script>


function loadLog() {
    var horario= document.getElementById('horario').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../administrador/posthorario.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("horario="+horario+"");
}
</script>
     </div>
</div>
    </div>
    </div>
		</div>
		

</body>
</html>
