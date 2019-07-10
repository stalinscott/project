<?php
	session_start();
	include_once('../includes/database.php');
  ini_set("display_errors", "on");
date_default_timezone_set('America/La_Paz');
$hora= date ("g:ia");
$fecha= date ("Y-m-d");
$fecha1= date ("d/m/Y");
$dia= date ("N");
$sql = "SELECT cedper
  FROM public.empleado;";
$rs = pg_query( $conexion, $sql );
if (!$rs) {
  echo "errado.\n";
  exit;
}

if($hora>="6:39am"){
	if( pg_num_rows($rs) > 0 ){
	$total=pg_num_rows($rs);
$le=0;
while($le<$total){
$arr = pg_fetch_array($rs, $le, PGSQL_ASSOC);
echo $arr["cedper"] . "\n";
$sql1 = "SELECT cedper
  FROM public.jornada WHERE jornada.cedper=".$arr["cedper"]." AND jornada.fecha_jornada='$fecha';
";
$rs1 = pg_query( $conexion, $sql1 );
if (!$rs1) {
  echo "errado.\n";
  exit;
}
if($objFila = pg_fetch_object($rs1)){
echo " estas  ".$objFila->cedper."    aca";
}else
{
echo "ingresar";
$sql2 = "INSERT INTO public.ausencia(cedper, dia, fecha_ausencia)
    VALUES ('".$arr["cedper"]."', '$dia', '$fecha');
";
pg_query( $conexion, $sql2 ); 
}


 echo "<br>";
	echo "<br>";
	$le++;
}
	echo "ES la hora".$hora;
	echo "<br>";
	echo "<br>";
	echo "total: ".$total;
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
}else{
	echo "espera tu hora";
}

}else{
	echo "espera tu hora";
}
?>


