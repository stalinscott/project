<?php 

if (isset($_POST))
{ 
           
}

   include_once('../includes/database.php');
    function listarEmpleado( $conexion, $cedper ){
    $sql = "SELECT justificacion.id_justificacion ,justificacion.comentario,justificacion.fecha_creacion,justificacion.id_tipo_justificacion,
justificacion.fecha_justificar,justificacion.cedper,justificacion.status,personal.nombres,personal.apellido,
depuniadm,personal.ofiuniadm,personal.minorguniadm,personal.uniuniadm,
personal.prouniadm,personal.estatus,tipo_justificacion.nom_justificacion
  FROM public.justificacion,public.personal,public.tipo_justificacion where justificacion.cedper=personal.cedper
AND tipo_justificacion.id_tipo_justificacion=justificacion.id_tipo_justificacion
   AND
  justificacion.cedper='$cedper';
";

    $sql1 = "SELECT sn_cargo.cargo,justificacion.id_justificacion ,justificacion.comentario,justificacion.fecha_creacion,justificacion.id_tipo_justificacion,
justificacion.fecha_justificar,justificacion.cedper,justificacion.status,personal.nombres,personal.apellido,
personal.depuniadm,personal.ofiuniadm,personal.minorguniadm,personal.uniuniadm,
personal.prouniadm,personal.estatus,tipo_justificacion.nom_justificacion, sno_unidadadm.desuniadm
  FROM public.justificacion,public.personal,public.tipo_justificacion, public.sno_unidadadm,public.sn_cargo 
  where justificacion.cedper=personal.cedper
AND tipo_justificacion.id_tipo_justificacion=justificacion.id_tipo_justificacion
AND sno_unidadadm.depuniadm=personal.depuniadm
AND sno_unidadadm.ofiuniadm=personal.ofiuniadm
AND sno_unidadadm.minorguniadm=personal.minorguniadm
AND sno_unidadadm.uniuniadm=personal.uniuniadm
AND sno_unidadadm.prouniadm=personal.prouniadm
AND sn_cargo.codcar=personal.codcar
   AND justificacion.cedper='$cedper';
";

    $ok = true;

    // Ejecutar la consulta:
    $rs = pg_query( $conexion, $sql );
    $rs1 = pg_query( $conexion, $sql1 );
            if( $obj = pg_fetch_object($rs1))
            {

       
     echo "<br> 
<div class='col-sm-12 slideanim'>
   
        <div class='col-sm-2 form-group'>
  Cedula:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->cedper' disabled >
        </div>
        <div class='col-sm-5 form-group'>
   Nombre:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->nombres' disabled >
        </div>
        <div class='col-sm-5 form-group'>
   Apellido:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->apellido' disabled >
        </div>
     
      <div class='col-sm-6 form-group'>
   Departamento:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->desuniadm' disabled >
        </div>
         <div class='col-sm-6 form-group'>
   Cargo:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->cargo' disabled >
        </div>
       </div>";
                   
            }

    if( $rs )
    {
      // Obtener el número de filas:
      if( pg_num_rows($rs) > 0 )
      {
        echo "<div class='col-sm-12 text-right form-group'>
          <a target='_blank' href='../root/fpdf4.php?id=".$codificado =
 base64_encode($_POST['sno_unidadadm'])."' class='btn btn-danger'>Exportar a PDF</a> <a href='../vista/consultar_justificaciones_director.php' class='btn btn-info' role='button'>Volver</a></div>    ";
        echo "<div class='container-fluid'>
        <table class='table'>
        <tr>
                                      <th>Fecha a Justificar</th>
                                      <th>Tipo de justificacion</th>
                                      <th>Comentario</th>
                                      <th>Aprobado</th>
                                      <th>opciones</th>
                            </tr>";

        // Recorrer el resource y mostrar los datos:
        while( $objFila = pg_fetch_object($rs) )
          echo "
            <tr class='table-primary'>
            <td>".$objFila->fecha_justificar." </td>
            <td>".$objFila->nom_justificacion." </td>
             <td>".$objFila->comentario." </td>
             <td>".$objFila->status." </td>
               <TD><A HREF='../vista/modificarjustificacion_director.php?id=".$codificado = base64_encode($objFila->id_justificacion)."' title='Modificar'><IMG SRC='../images/navegador.png' ALT='modificar'></A>            
                      <A HREF='../vista/borrarjustificacion_director.php?id=".$codificado = base64_encode($objFila->id_justificacion)."' title='Borrar'><IMG SRC='../images/borrar.png' ALT='borrar'></A></TD>
               </tr></div>";
               echo "</table><br></div> ";
      }
      else
      echo "<br><div class='panel panel-danger'>
      <div class='panel-heading'>No se encontro justificaciones por inasistencia<A HREF='../vista/consultar_justificaciones_director.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
    }
    else
      $ok = false;

    return $ok;
  }

  // Modificar la persona:
  $cedper=$_POST['cedper'];
  $ok = listarEmpleado( $conexion, $cedper );

  