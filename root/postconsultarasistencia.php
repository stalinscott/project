<?php 

if (isset($_POST))
{

}
include_once('../includes/database.php');
		function listarAsistencia( $conexion, $id, $fi, $cedper ){
		$sql = "SELECT jornada.fecha_jornada, jornada.cedper, jornada.h_entrada, jornada_salida.h_salida FROM jornada, jornada_salida WHERE  jornada.fecha_jornada BETWEEN '$id'
AND '$fi' AND jornada.cedper='$cedper' AND jornada.cedper=jornada_salida.cedper AND jornada.fecha_jornada=jornada_salida.fecha_jornada ORDER BY jornada.fecha_jornada ASC";
		$sql1 = "SELECT justificacion.id_justificacion ,justificacion.comentario,justificacion.fecha_creacion,justificacion.id_tipo_justificacion,
justificacion.fecha_justificar,justificacion.cedper,justificacion.status,personal.nombres,personal.apellido,
personal.depuniadm,personal.ofiuniadm,personal.minorguniadm,personal.uniuniadm,
personal.prouniadm,personal.estatus,tipo_justificacion.nom_justificacion, sno_unidadadm.desuniadm
  FROM public.justificacion,public.personal,public.tipo_justificacion, public.sno_unidadadm 
  where justificacion.cedper=personal.cedper
AND tipo_justificacion.id_tipo_justificacion=justificacion.id_tipo_justificacion
AND sno_unidadadm.depuniadm=personal.depuniadm
AND sno_unidadadm.ofiuniadm=personal.ofiuniadm
AND sno_unidadadm.minorguniadm=personal.minorguniadm
AND sno_unidadadm.uniuniadm=personal.uniuniadm
AND sno_unidadadm.prouniadm=personal.prouniadm
   AND justificacion.cedper='$cedper'";

		$ok = true;

		// Ejecutar la consulta:
		$rs = pg_query( $conexion, $sql );
		$rs1 = pg_query( $conexion, $sql1 );

		if( $obj = pg_fetch_object($rs1))
            {

       
     echo "<br> <div class='col-sm-12 slideanim'>
      <div class='row'>
        <div class='col-sm-2 form-group'>
  Cedula:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->cedper' disabled >
        </div>
        <div class='col-sm-5 form-group'>
   Nombre:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->nombres' disabled >
        </div>
        <div class='col-sm-5 form-group'>
   Apellido:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->apellido' disabled >
        </div>
      </div>
      <div class='row'>
      <div class='col-sm-12 form-group'>
   Departamento:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$obj->desuniadm' disabled >
        </div>
         <div class='col-sm-6 form-group'>
   Desde:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$id' disabled >
        </div>
         <div class='col-sm-6 form-group'>
   Hasta:<input class='form-control' id='cedper' type='cedper'  placeholder='Cedula de identidad' name='cedper' required='' value='$fi' disabled >
        </div>
       </div>
          ";
         echo "<div class='col-sm-12 text-right'><a target='_blank' href='../root/fpdf.php?id=".$codificado =
 base64_encode($cedper)."&id2=".$codificado1 =
 base64_encode($id)."&id3=".$codificado2 =
 base64_encode($fi)."' class='btn btn-danger'>Exportar a PDF</a>        ";
echo "<a href='../vista/consultar_asistencia.php' class='btn btn-info' role='button'>Volver</a> </div></div><br><br><br><br><br><br><br><br><br><br>";
                   
            }

		if( $rs )
		{
			// Obtener el número de filas:
			if( pg_num_rows($rs) > 0 )
			{

				echo "<table class='table'>
					<tr>
																				
																		 <th>Fecha</th>
																		 <th>Hora Entrada</th>
																				<th>Hora Salida</th>
														</tr>";


				// Recorrer el resource y mostrar los datos:
				while( $objFila = pg_fetch_object($rs) )

					echo " <tr>
               <td> ".$objFila->fecha_jornada."
               </td>
               <td>".$objFila->h_entrada."
               </td>
               <td> ".$objFila->h_salida."
               </td></tr>";
			}
			else
				echo "<br><br><br><div class='panel panel-danger'>
			
      <div class='panel-heading'>No se encontraron Asistencias<A HREF='../vista/consultar_asistencia.php' title='Modificar'><IMG align='right' SRC='../images/revisar.png' ALT='modificar'></A>";
		}
		else
			$ok = false;

		return $ok;
	}

	// Modificar la persona:
	$id = $_POST["email"];
	$fi = $_POST["password"];
	$cedper = $_POST["cedper"];
	$ok = listarAsistencia( $conexion, $id, $fi, $cedper );

	