<?php
require('../fpdf/fpdf.php');
require('../includes/database.php');
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_pie.php');
require_once ('../jpgraph/jpgraph_pie3d.php');
 
class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colores de los bordes, fondo y texto
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Ancho del borde (1 mm)
    $this->SetLineWidth(1);
    // Título
    $this->Cell($w,9,$title,1,1,'C',true);
    // Salto de línea
    $this->Ln(10);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
}

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Color de fondo
    $this->SetFillColor(200,220,255);
    // Título
    $this->Cell(0,6,"Capítulo $num : $label",0,1,'L',true);
    // Salto de línea
    $this->Ln(4);
}

function ChapterBody($file)
{
    // Leemos el fichero
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Imprimimos el texto justificado
    $this->MultiCell(0,5,$txt);
    // Salto de línea
    $this->Ln();
    // Cita en itálica
    $this->SetFont('','I');
    $this->Cell(0,5,'(fin del extracto)');
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../images/fundayacucho.jpg' , 10,8, 25 , 25,'JPG');
$pdf->Cell(25, 10, '', 0);
$title = 'Reporte Asistencia';
$pdf->SetTitle($title);
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
$id2=$_GET["id2"];
$id3=$_GET["id3"];
        $decodificado = base64_decode($id);
        $decodificado2 = base64_decode($id2);
        $decodificado3 = base64_decode($id3);
$sql = "SELECT jornada.fecha_jornada, jornada.cedper, jornada.h_entrada, jornada_salida.h_salida FROM jornada, jornada_salida WHERE  jornada.fecha_jornada BETWEEN '$decodificado2'
AND '$decodificado3' AND jornada.cedper='$decodificado' AND jornada.cedper=jornada_salida.cedper AND jornada.fecha_jornada=jornada_salida.fecha_jornada ORDER BY jornada.fecha_jornada ASC";
  $ok = true;
  $productos = pg_query( $conexion, $sql );
  while($productos2 = pg_fetch_array($productos)){
  	$pdf->Cell(15, 8, $productos2['h_entrada'], 0);
	$pdf->Cell(80, 8,$productos2['h_salida'], 0);
	$pdf->Ln(8);
}

$pdf->Output();
?>