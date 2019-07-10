<?php 
  
if (isset($_POST))
{
  echo "<br><div class='panel panel-success'>
      <div class='panel-heading'>Horarios creado Sastisfactoriamente<img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
      </div>  ";
      echo "</table><br><a href='../vista/consultar_horario_talento.php' class='btn btn-info' role='button'>Volver</a></div> ";
  /*
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
      echo $depuniadm;
    echo " ";
    echo $ofiuniadm;
    echo " ";
    echo $minorguniadm;
    echo " ";
    echo $uniuniadm;
    echo " ";
    echo $prouniadm;
    echo " ";
    echo $_POST["lunes_e"];
    echo " ";
  echo $_POST["lunes_e"];
    echo " ";
  echo $_POST["lunes_s"];
    echo " ";
  echo $_POST["martes_e"];
    echo " ";
  echo $_POST["martes_s"];
    echo " ";
  echo $_POST["miercoles_e"];
    echo " ";
  echo $_POST["miercoles_s"];
    echo " ";
  echo $_POST["jueves_e"];
    echo " ";
  echo $_POST["jueves_s"];
   echo " ";
  echo $_POST["viernes_e"];
    echo " ";
  echo $_POST["viernes_s"];
    echo " ";
     echo " ";
  echo $_POST["sabado_e"];
    echo " ";
  echo $_POST["sabado_s"];
    echo " ";
     echo " ";
  echo $_POST["domingo_e"];
    echo " ";
  echo $_POST["domingo_s"];
    echo " ";
echo $_POST["deshor"];
    echo " ";
    */
    

}
include_once('../includes/database.php');
function insertarHorario( $conexion, $depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm, $lunes_e, $lunes_s, $martes_e, $martes_s, $miercoles_e, $miercoles_s, $jueves_e, $jueves_s, $viernes_e, $viernes_s, $sabado_e, $sabado_s, $domingo_e, $domingo_s, $deshor )
	{
    list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
    $sql = "INSERT INTO public.horario(depuniadm, ofiuniadm, minorguniadm, uniuniadm, prouniadm, 
            lunes_e, lunes_s, martes_e, martes_s, miercoles_e, miercoles_s, 
            jueves_e, jueves_s, viernes_e, viernes_s, sabado_e, sabado_s, 
            domingo_e, domingo_s, deshor)
    VALUES ('".$depuniadm."', '".$ofiuniadm."', '".$minorguniadm."', '".$uniuniadm."', '".$prouniadm."', '".$lunes_e."', 
            '".$lunes_s."', '".$martes_e."', '".$martes_s."', '".$miercoles_e."', '".$miercoles_s."', '".$jueves_e."', 
            '".$jueves_s."', '".$viernes_e."', '".$viernes_s."', '".$sabado_e."', '".$sabado_s."', '".$domingo_e."', 
            '".$domingo_s."', '".$deshor."')";

		// Ejecutamos la consulta (se devolverá true o false):
		return pg_query( $conexion, $sql );
	}
 list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
	$lunes_e = $_POST["lunes_e"];
	$lunes_s = $_POST["lunes_s"];
	$martes_e = $_POST["martes_e"];
	$martes_s = $_POST["martes_s"];
	$miercoles_e = $_POST["miercoles_e"];
	$miercoles_s = $_POST["miercoles_s"];
	$jueves_e = $_POST["jueves_e"];
	$jueves_s = $_POST["jueves_s"];
	$viernes_e = $_POST["viernes_e"];
	$viernes_s = $_POST["viernes_s"];
	$sabado_e = $_POST["sabado_e"];
	$sabado_s = $_POST["sabado_s"];
	$domingo_e = $_POST["domingo_e"];
	$domingo_s = $_POST["domingo_s"];
	$deshor = $_POST["deshor"];
	$ok = insertarHorario( $conexion,$depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm,$lunes_e, $lunes_s, $martes_e, $martes_s, $miercoles_e, $miercoles_s, $jueves_e, $jueves_s, $viernes_e, $viernes_s, $sabado_e, $sabado_s, $domingo_e, $domingo_s, $deshor );
