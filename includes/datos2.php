<?php 
 include_once('../includes/database.php');
  list($depuniadm,$ofiuniadm,$minorguniadm,$uniuniadm,$prouniadm) = explode('-',$_POST['sno_unidadadm']);
  $sql = "SELECT *
  FROM public.personal
  WHERE personal.depuniadm='$depuniadm' 
  and personal.ofiuniadm='$ofiuniadm' 
  and personal.minorguniadm='$minorguniadm'
    and personal.uniuniadm='$uniuniadm'
   and personal.prouniadm='$prouniadm' ORDER BY
   cedper DESC";
  $ok = true;
  $rs = pg_query( $conexion, $sql );
  $cadena="<select class='form-control' required='required' id='prueba' name='prueba'>";
  while( $objFila = pg_fetch_object($rs) ){
  $cadena=$cadena.'<option value="'.$objFila->cedper.'">'.$objFila->cedper.'</option></div>';
  };

  echo  $cadena;

?>