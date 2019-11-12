<?php 

if (isset($_POST))
{ 
           
}
include_once('../includes/database.php');
    function listarHorario( $conexion, $codorg ){
        list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
    $sql = "  SELECT *
  FROM horario,sno_unidadadm WHERE horario.depuniadm='$depuniadm' 
  and horario.ofiuniadm='$ofiuniadm' 
  and horario.minorguniadm='$minorguniadm'
   and horario.uniuniadm='$uniuniadm' 
   and horario.prouniadm='$prouniadm' and sno_unidadadm.depuniadm=horario.depuniadm and sno_unidadadm.ofiuniadm=horario.ofiuniadm and sno_unidadadm.minorguniadm=horario.minorguniadm and sno_unidadadm.uniuniadm=horario.uniuniadm and sno_unidadadm.prouniadm=horario.prouniadm";
    $sql1 = "SELECT *
  FROM sno_unidadadm 
  WHERE 
  sno_unidadadm.depuniadm='$depuniadm' 
  and sno_unidadadm.ofiuniadm='$ofiuniadm' 
  and sno_unidadadm.minorguniadm='$minorguniadm'
   and sno_unidadadm.uniuniadm='$uniuniadm' 
   and sno_unidadadm.prouniadm='$prouniadm'";

    $ok = true;

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );
       $rs1 = pg_query( $conexion, $sql1 );

    if( $obj = pg_fetch_object($rs1))
            {

       
           
     echo "<br> <div class='col-sm-12'>

      <div class='row'>
      <div class='col-sm-12 form-group'>
   Departamento:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->desuniadm' disabled >
        </div>
       </div>
          ";
                   
            }

    if( $rs )
    {
      if( pg_num_rows($rs) > 0 )
      {
        echo "<div class='col-sm-12 text-right'>
          <a target='_blank' href='../root/fpdf4.php?id=".$codificado =
 base64_encode($_POST['sno_unidadadm'])."' class='btn btn-danger'>Exportar a PDF</a> <a href='../vista/consultar_horario_talento.php' class='btn btn-info' role='button'>Volver</a></div>  <br> <br>     ";
        echo " <table class='table'>
        <tr>
                                      <th>Horario</th>
                                        <th>Lunes</th>
                                        <th>Martes</th>
                                     <th>Miercoles</th>
                                     <th>Jueves</th>
                                     <th>Viernes</th>
                                     <th>Sabado</th>
                                     <th>Domingo</th>
                                     <th>opciones</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo "
            <tr class='table-primary'>
           <td>".$objFila->deshor." </td>
                <td><b>Entrada:</b><br>".$objFila->lunes_e." <br> <b>Salida:</b><br>".$objFila->lunes_s." </td>
               <td><b>Entrada:</b><br>".$objFila->martes_e."<br> <b>Salida:</b><br>".$objFila->martes_s." </td>
               <td><b>Entrada:</b><br>".$objFila->miercoles_e."<br> <b>Salida:</b><br>".$objFila->miercoles_s." </td>
               <td><b>Entrada:</b><br>".$objFila->jueves_e."<br> <b>Salida:</b><br>".$objFila->jueves_s." </td>
               <td><b>Entrada:</b><br>".$objFila->viernes_e."<br><b>Salida:</b><br>".$objFila->viernes_s." </td>
               <td><b>Entrada:</b><br>".$objFila->sabado_e."<br><b>Salida:</b><br>".$objFila->sabado_s." </td>
               <td><b>Entrada:</b><br>".$objFila->domingo_e."<br><b>Salida:</b><br>".$objFila->domingo_s." </td>
               <TD><A HREF='../vista/modificarhorario_talento.php?id=".$codificado = base64_encode($objFila->id_horario)."' title='Modificar'><IMG SRC='../images/navegador.png' ALT='modificar'></A>            
                      <A HREF='../vista/borrarhorario_talento.php?id=".$codificado = base64_encode($objFila->id_horario)."' title='Borrar'><IMG SRC='../images/borrar.png' ALT='borrar'></A></TD>
               </tr></div>";
               echo "</table></div> ";
      }
      else
      echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>No se encontraro horario<A HREF='../vista/consultar_horario_talento.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
    }
    else
      $ok = false;

    return $ok;
  }
  // Modificar la persona:
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
  $ok = listarHorario( $conexion, $sno_unidadadm );

  







