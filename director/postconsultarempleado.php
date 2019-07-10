<?php 

if (isset($_POST))
{ 
           
}
include_once('../includes/database.php');
    function listarEmpleado( $conexion, $codorg ){
        list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
    $sql = "SELECT *
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

    $ok = true;

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );

    if( $rs )
    {
      // Obtener el número de filas:
      if( pg_num_rows($rs) > 0 )
      {

        echo "<div class='container-fluid'>
        <table class='table'>
        <tr>
                                      <th>Cedula</th>
                                      <th>Nombre</th>
                                      <th>Apellido</th>
                                      <th>Departamento</th>
                                      <th>Rol</th>
                                      <th>opciones</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo "
            <div class='container-fluid'>
            <tr class='table-primary'>
            <td>".$objFila->cedper." </td>
             <td>".$objFila->nombres." </td>
             <td>".$objFila->apellido." </td>
              <td>".$objFila->desuniadm." </td>
                <td>".$objFila->nom_rol." </td>
               <TD><A HREF='../vista/modificarempleado_director.php?id=".$codificado = base64_encode($objFila->cedper)."' title='Modificar'><IMG SRC='../images/navegador.png' ALT='modificar'></A>            
                      <A HREF='../vista/borrarempleado_director.php?id=".$codificado = base64_encode($objFila->cedper)."' title='Borrar'><IMG SRC='../images/borrar.png' ALT='borrar'></A></TD>
               </tr></div>";
               echo "</table><br><a href='../vista/consultar_empleado_director.php' class='btn btn-info' role='button'>Volver</a></div> ";
      }
      else
      echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>No se encontraro personal<A HREF='../vista/consultar_personal_director.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
    }
    else
      $ok = false;

    return $ok;
  }

  // Modificar la persona:
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
  $ok = listarEmpleado( $conexion, $sno_unidadadm );

  