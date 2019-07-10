<?php 
  
if (isset($_POST))
{
    echo "<br><br><br><div class='panel panel-success'>
      <div class='panel-heading'>Horario Modificado <img align='right' src='../images/marcar.png' class='img-circle' alt='Cinque Terre'> </div>
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
            <td>".$_POST["deshor"]." </td>
                <td>Entrada: ".$_POST["lunes_e"]." <br> Salida: ".$_POST["lunes_s"]." </td>
                <td>Entrada: ".$_POST["martes_e"]." <br> Salida: ".$_POST["martes_s"]." </td>
                <td>Entrada: ".$_POST["miercoles_e"]." <br> Salida: ".$_POST["miercoles_s"]."</td>
               <td>Entrada: ".$_POST["jueves_e"]." <br> Salida: ".$_POST["jueves_s"]." </td>
               <td>Entrada: ".$_POST["viernes_e"]." <br> Salida: ".$_POST["viernes_s"]." </td>
               <td>Entrada: ".$_POST["sabado_e"]." <br> Salida: ".$_POST["sabado_s"]." </td>
               <td>Entrada: ".$_POST["domingo_e"]." <br> Salida: ".$_POST["domingo_s"]." </td>
               </tr>";
               echo "</table><br><a href='../vista/consultar_horario_director.php' class='btn btn-info' role='button'>Volver</a></div>
    ";
     
    
    

}
include_once('../includes/database.php');
function modificarHorario( $conexion, $lunes_e, $lunes_s, $martes_e, $martes_s, $miercoles_e, $miercoles_s, $jueves_e, $jueves_s, $viernes_e, $viernes_s, $sabado_e, $sabado_s, $domingo_e, $domingo_s, $deshor, $id )
	{
    
    $sql = "UPDATE public.horario
   SET lunes_e='$lunes_e', lunes_s='$lunes_s', martes_e='$martes_e', martes_s='$martes_s', miercoles_e='$miercoles_e', 
       miercoles_s='$miercoles_s', jueves_e='$jueves_e', jueves_s='$jueves_s', viernes_e='$viernes_e', viernes_s='$viernes_s', 
       sabado_e='$sabado_e', sabado_s='$sabado_s', domingo_e='$domingo_e', domingo_s='$domingo_s', deshor='$deshor'
 WHERE id_horario='$id'";

		// Ejecutamos la consulta (se devolverá true o false):
		return pg_query( $conexion, $sql );
	}
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
  $id = $_POST["id"];
	$ok = modificarHorario( $conexion,$lunes_e, $lunes_s, $martes_e, $martes_s, $miercoles_e, $miercoles_s, $jueves_e, $jueves_s, $viernes_e, $viernes_s, $sabado_e, $sabado_s, $domingo_e, $domingo_s, $deshor, $id );
