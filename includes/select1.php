<?php 
 include_once('../includes/database.php');
 list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm) = explode('-',$_POST['sno_unidadadm']);
  $sql = "SELECT *
  FROM public.personal
  WHERE personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
   and personal.prouniadm='$prouniadm'
   and personal.uniuniadm='$uniuniadm'
    ORDER BY
   cedper DESC";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
 $cadena= "<option value='0'>Seleccione Empleado</option>";
  while( $objFila = pg_fetch_object($rs) ){
  $cadena.='<option value="'.$objFila->cedper.'">'.$objFila->cedper.'-'.$objFila->nombres.'-'.$objFila->apellido.'</option></div>';
  };

  echo  $cadena;

?>