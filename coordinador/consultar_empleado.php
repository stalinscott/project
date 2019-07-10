
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
          <li ><a href="empleado_coordinador.php"><img src="../images/1.2.png" alt="#"/> Empleado</a></li>
            <li class="active"><a href="consultar_empleado_coordinador.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
  <h2  align="center">Consultar Empleado</h2>
      <div id="login">        
<div class='container-fluid'>
<h2> Departamento:</h2>
  <div class="form-group">
      <div class="col-lg-6">
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
       <span >
          <button type="submit"  class="btn btn-primary " type="button" onclick="loadLog()">Consultar</button>
          </span>
    </div>
  
</div>
</div>
<br>
       
            </div>
        </div> 
      
<script>


function loadLog() {
    var sno_unidadadm= document.getElementById('sno_unidadadm').value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    document.getElementById("login").innerHTML = xhttp.responseText;
    }
  };
    xhttp.open("POST", "../coordinador/postconsultarempleado.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("sno_unidadadm="+sno_unidadadm+"");
}
</script>

     </div>
    </div>
    </div>
    </div>
    

</body>
</html>
