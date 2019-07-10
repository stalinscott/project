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
            	echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>Borrar Horario <img align='right' src='../images/revisar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
      echo "<div class='container-fluid'>
        <table class='table'>
        <tr>
                                      <th>Horario</th>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                     <th>Miercoles</th>
                                     <th>Jueves</th>
                                     <th>Viernes</th>
                                     <th>Sabado</th>
                                     <th>Domingo</th>
                            </tr>";
     echo "
            
            
            <tr class='table-primary'>
            <td>".$obj->deshor." </td>
                <td>Entrada: ".$obj->lunes_e." <br> Salida: ".$obj->lunes_s." </td>
                <td>Entrada: ".$obj->martes_e." <br> Salida: ".$obj->martes_s." </td>
                <td>Entrada: ".$obj->miercoles_e." <br> Salida: ".$obj->miercoles_s."</td>
               <td>Entrada: ".$obj->jueves_e." <br> Salida: ".$obj->jueves_s." </td>
               <td>Entrada: ".$obj->viernes_e." <br> Salida: ".$obj->viernes_s." </td>
               <td>Entrada: ".$obj->sabado_e." <br> Salida: ".$obj->sabado_s." </td>
               <td>Entrada: ".$obj->domingo_e." <br> Salida: ".$obj->domingo_s." </td>
               </tr>";
               echo "</table><div class='well well-sm'><center>¿Seguro desea eliminar este horario?</Center></div>
      			<center><a  href='../vista/postborrarhorario_talento.php?id=".$codificado = base64_encode($objFila->id_horario)."' class='btn btn-success' role='button'>Si</a>
               <a  href='../vista/consultar_horario_talento.php' class='btn btn-danger role='button'>No</a></center></div>";
            	}
            else
                $ok = false;
            return $ok;
        }
            ?>
    </div>
    </div>
		</div>
		

</body>
</html>


