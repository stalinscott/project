<?php 
 include_once('../includes/database.php');

 list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm) = explode('-',$_POST['sno_unidadadm1']);
  
  $sql = "SELECT *
  FROM public.sno_unidadadm
  WHERE sno_unidadadm.depuniadm='$depuniadm' 
  and sno_unidadadm.ofiuniadm='$ofiuniadm' 
  and sno_unidadadm.minorguniadm='$minorguniadm'
   and sno_unidadadm.prouniadm='$prouniadm' ORDER BY
   desuniadm DESC";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  $cadena= "<option value='0'>Seleccione Departamento</option>";
  while( $objFila = pg_fetch_object($rs) ){
  $cadena.='<option value="'.$objFila->depuniadm.'-'.$objFila->ofiuniadm.'-'.$objFila->minorguniadm.'-'.$objFila->uniuniadm.'-'.$objFila->prouniadm.'">'.$objFila->desuniadm.'</option></div>';
  };

	echo  $cadena;

?>