<?php 

if (isset($_POST))
{      
}
include_once('../includes/database.php');
    function listarHorario( $conexion, $codorg, $desde, $hasta){
        list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
    $sql = "SELECT *
  FROM public.jornada,public.personal,public.sno_unidadadm WHERE personal.cedper=jornada.cedper 
  AND personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
   and personal.uniuniadm='$uniuniadm' 
   and personal.prouniadm='$prouniadm'
   and sno_unidadadm.depuniadm=personal.depuniadm 
   and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm
   AND jornada.fecha_jornada BETWEEN '$desde'
AND '$hasta'";

    $sql1 = "SELECT *
  FROM personal,sno_unidadadm,empleado,rol WHERE personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
   and personal.uniuniadm='$uniuniadm' 
   and personal.prouniadm='$prouniadm' and sno_unidadadm.depuniadm=personal.depuniadm 
   and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm
   and personal.cedper=empleado.cedper
   and empleado.id_rol=rol.id_rol";

       $sql2 = "SELECT *
  FROM public.ausencia, public.personal
  WHERE personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
   and personal.uniuniadm='$uniuniadm' 
   and personal.prouniadm='$prouniadm'
   and personal.cedper=ausencia.cedper";

    $ok = true;

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );
    $rs1 = pg_query( $conexion, $sql1 );
    $rs2 = pg_query( $conexion, $sql2 );
    $rows = pg_num_rows($rs);
    $rows1 = pg_num_rows($rs1);
    $rows2 = pg_num_rows($rs2);

    if( $obj = pg_fetch_object($rs1))
            {


       
     echo "<br> <div class='col-sm-12 slideanim'>
      <div class='row'>
      <div class='col-sm-8 form-group'>
   Departamento:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->desuniadm' disabled >
        </div>
         <div class='col-sm-4 form-group'>
   Total de empleados:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$rows1' disabled >
        </div>
      <div class='col-sm-6 form-group'>
   Desde:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$desde' disabled >
        </div>
             <div class='col-sm-6 form-group'>
   Hasta:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$hasta' disabled >
        </div>
       </div>
          ";
        }
    if( $rs | $rs1 | $rs2 )
    { 
      if( pg_num_rows($rs) > 0 )
      {
     
         echo "<div class='col-sm-12 text-right'><a target='_blank' href='../director/grafica.php?id=".$codificado =
 base64_encode($obj->desuniadm)."&id2=".$codificado1 =
 base64_encode($rows)."&id3=".$codificado2 =
 base64_encode($rows2)."' class='btn btn-danger'>Exportar a PDF</a>        ";
echo "<a href='../vista/reporte_asistencias_director.php' class='btn btn-info' role='button'>Volver</a> </div></div><br><br><br><br><br><br>";

        echo "<br><br><table class='table'>
        <br>
          <tr>
                                     <th>Asistencias</th>
                                     <th>Ausencias</th>
                            </tr>";
                            echo " <tr>
               <td>".$rows."
               </td>
               <td> ".$rows2 ."
               </td></tr>";
                   
            }   else
        echo "<div class='panel panel-danger'>
      
      <div class='panel-heading'>No se encontraron Asistencias<A HREF='../vista/reporte_asistencias_director.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";

    }
    else
        
      $ok = false;

    return $ok;
  }
   $desde = $_POST["desde"];
    $hasta = $_POST["hasta"];
  $ok = listarHorario( $conexion, $codorg, $desde, $hasta );

  







