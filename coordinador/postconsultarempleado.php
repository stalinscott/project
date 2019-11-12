<?php 

if (isset($_POST))
{ 
           
}
include_once('../includes/database.php');
    function listarEmpleado( $conexion, $codorg ){
        list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
   $sql = "SELECT *
  FROM personal,sno_unidadadm,empleado,rol,horario WHERE personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
   and personal.uniuniadm='$uniuniadm' 
   and personal.prouniadm='$prouniadm' 
    and sno_unidadadm.depuniadm=personal.depuniadm 
   and sno_unidadadm.ofiuniadm=personal.ofiuniadm 
   and sno_unidadadm.minorguniadm=personal.minorguniadm 
   and sno_unidadadm.uniuniadm=personal.uniuniadm 
   and sno_unidadadm.prouniadm=personal.prouniadm
   and personal.cedper=empleado.cedper
   and empleado.id_rol=rol.id_rol
   and empleado.id_horario=horario.id_horario";
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
      // Obtener el número de filas:
      if( pg_num_rows($rs) > 0 )
      {
        echo "<div class='col-sm-12 text-right'>
          <a target='_blank' href='../root/fpdf2.php?id=".$codificado =
 base64_encode($_POST['sno_unidadadm'])."' class='btn btn-danger'>Exportar a PDF</a> <a href='../vista/consultar_empleado_coordinador.php' class='btn btn-info' role='button'>Volver</a></div>  <br> <br>     ";
       echo "<table class='table'>
        <tr>
                                      <th>Cedula</th>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Horario</th>
                                      <th>Rol</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo "
            <div class='container-fluid'>
            <tr class='table-primary'>
            <td>".$objFila->cedper." </td>
             <td>".$objFila->nombres." </td>
             <td>".$objFila->apellido." </td>
              <td>".$objFila->deshor." </td>
                <td>".$objFila->nom_rol." </td>
               </tr></div>";
      }
      else
      echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>No se encontraro personal<A HREF='../vista/consultar_empleado_coordinador.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
    }
    else
      $ok = false;

    return $ok;
  }

  // Modificar la persona:
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
  $ok = listarEmpleado( $conexion, $sno_unidadadm );

  