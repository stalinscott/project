
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
            <li><a href="departamento_root.php"><img src="../images/1.2.png" alt="#"/> Departamento</a></li>
            <li class="active"><a href="consultar_departamento.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
  <div class="panel-heading">
        <h2  align="center">Consultar Departamentos</h2>
    </div>
<?php
include_once('../includes/database.php');
function listarPersonas( $conexion )
  {
    $sql = "SELECT codorg, desorg
  FROM sno_organigrama limit 6 offset 0;
";
    $ok = true;

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );

    if( $rs )
    {
      // Obtener el número de filas:
      if( pg_num_rows($rs) > 0 )
      {
        echo "<table class='table'>
          <tr>
                                        <th>Codigo</th>
                                     <th>Nombre</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo " <tr> <td> ".$objFila->codorg." </td>
               <td> ".$objFila->desorg."
               </td></tr>";
      }
      else
        echo "No se encontraron personas<br />";
    }
    else
      $ok = false;

    return $ok;
  }
  

$ok = listarPersonas( $conexion );

?>
                </div>
      
    </div>
    </div>
		</div>
		

</body>
</html>
