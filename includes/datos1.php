<?php 
 include_once('../includes/database.php');
 $cedper = $_POST["cedper"];
  $sql = "SELECT *
  FROM public.personal,public.sno_unidadadm
  WHERE personal.depuniadm=sno_unidadadm.depuniadm
  AND personal.ofiuniadm=sno_unidadadm.ofiuniadm
   AND personal.minorguniadm=sno_unidadadm.minorguniadm
   AND personal.uniuniadm=sno_unidadadm.uniuniadm
   AND personal.prouniadm=sno_unidadadm.prouniadm
  AND personal.cedper='$cedper'";
  $ok = true;
   $rs = pg_query( $conexion, $sql );
  $cadena= "<option value='0'>Seleccione Departamento</option>";
  while( $objFila = pg_fetch_object($rs) ){
  $cadena.='<option value="'.$objFila->depuniadm.'-'.$objFila->ofiuniadm.'-'.$objFila->minorguniadm.'-'.$objFila->uniuniadm.'-'.$objFila->prouniadm.'">'.$objFila->desuniadm.'</option></div>';
  };

  echo  $cadena;

?>