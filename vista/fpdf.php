<?php
require('../fpdf/fpdf.php');
require('../includes/database.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../images/fundayacucho.jpg' , 10,8, 25 , 25,'JPG');
$pdf->Cell(25, 10, '', 0);
$pdf->Cell(125, 10, 'Sistema de Asistencia Funda Ayacucho', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'Asistencia', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Item', 0);
$pdf->Cell(80, 8, 'Nombre', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
$id=$_GET["id"];
        $decodificado = base64_decode($id);
$sql = "SELECT jornada.fecha_jornada, jornada.cedper, jornada.h_entrada, jornada_salida.h_salida FROM jornada, jornada_salida WHERE   jornada.cedper='$decodificado' AND jornada.cedper=jornada_salida.cedper";
  $ok = true;
  $productos = pg_query( $conexion, $sql );
  while($productos2 = pg_fetch_array($productos)){
  	$pdf->Cell(15, 8, $productos2['h_entrada'], 0);
	$pdf->Cell(80, 8,$productos2['h_salida'], 0);
	$pdf->Ln(8);
}

$pdf->Output();
?>