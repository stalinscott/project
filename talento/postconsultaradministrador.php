<?php 

if (isset($_POST))
{ 
           
}

   include_once('../includes/database.php');
    function listarEmpleado( $conexion, $codorg ){
        list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
    $sql = "SELECT * FROM administrador,personal,rol,sno_unidadadm WHERE personal.depuniadm='$depuniadm' 
  and administrador.ofiuniadm='$ofiuniadm' 
  and administrador.minorguniadm='$minorguniadm'
   and administrador.uniuniadm='$uniuniadm' 
   and administrador.prouniadm='$prouniadm' and administrador.cedper=personal.cedper AND administrador.id_rol=rol.id_rol AND administrador.depuniadm=sno_unidadadm.depuniadm
            AND administrador.ofiuniadm=sno_unidadadm.ofiuniadm
            AND administrador.minorguniadm=sno_unidadadm.minorguniadm
            AND administrador.uniuniadm=sno_unidadadm.uniuniadm
            AND administrador.prouniadm=sno_unidadadm.prouniadm
            AND rol.id_rol!='1'
            AND rol.id_rol!='2'";

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
                                      <th>Usuario</th>
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
            <td>".$objFila->usuario." </td>
             <td>".$objFila->nombres." </td>
             <td>".$objFila->apellido." </td>
              <td>".$objFila->desuniadm." </td>
                <td>".$objFila->nom_rol." </td>
               <TD><A HREF='../vista/modificaradministrador_talento.php?id=".$codificado = base64_encode($objFila->cedper)."' title='Modificar'><IMG SRC='../images/navegador.png' ALT='modificar'></A>            
                      <A HREF='../vista/borraradministrador_talento.php?id=".$codificado = base64_encode($objFila->cedper)."' title='Borrar'><IMG SRC='../images/borrar.png' ALT='borrar'></A></TD>
               </tr></div>";
               echo "</table><br><a href='../vista/consultar_administrador_talento.php' class='btn btn-info' role='button'>Volver</a></div> ";
      }
      else
      echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>No se encontraron administradores<A HREF='../vista/consultar_administrador.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
    }
    else
      $ok = false;

    return $ok;
  }

  // Modificar la persona:
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm)= (explode('-',$_POST['sno_unidadadm']));
  $ok = listarEmpleado( $conexion, $sno_unidadadm );

  