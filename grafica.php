<?php
require('../fpdf/fpdf.php');
require('../includes/database.php');
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_pie.php');
require_once ('../jpgraph/jpgraph_pie3d.php');
 $id=$_GET["id"];
$id2=$_GET["id2"];
$id3=$_GET["id3"];
        $decodificado2 = base64_decode($id2);
        $decodificado3 = base64_decode($id3);
class Reporte extends FPDF
{
     public function __construct($orientation='P', $unit='mm', $format='A4')
  {
   parent::__construct($orientation, $unit, $format);
 } 
public function gaficoPDF($datos = array(),$nombreGrafico = NULL,$ubicacionTamamo = array(),$titulo = NULL)
 { 
  //construccion de los arrays de los ejes x e y
  if(!is_array($datos) || !is_array($ubicacionTamamo)){
   echo "los datos del grafico y la ubicacion deben de ser arreglos";
  }
  elseif($nombreGrafico == NULL){
   echo "debe indicar el nombre del grafico a crear";
  }
  else{ 
   #obtenemos los datos del grafico  
   foreach ($datos as $key => $value){
    $data[] = $value[0];
    $nombres[] = $key; 
    $color[] = $value[1];
   } 
   $x = $ubicacionTamamo[0];
   $y = $ubicacionTamamo[1]; 
   $ancho = $ubicacionTamamo[2];  
   $altura = $ubicacionTamamo[3];  
   #Creamos un grafico vacio
   $graph = new PieGraph(700,450);
   #indicamos titulo del grafico si lo indicamos como parametro
   if(!empty($titulo)){
    $graph->title->Set($titulo);
   }   
   //Creamos el plot de tipo tarta
   $p1 = new PiePlot3D($data);
   $p1->SetSliceColors($color);
   #indicamos la leyenda para cada porcion de la tarta
   $p1->SetLegends($nombres);
   //Añadirmos el plot al grafico
   $graph->Add($p1);
   //mostramos el grafico en pantalla
   $graph->Stroke("$nombreGrafico.png"); 
   $this->Image("$nombreGrafico.png",$x,$y,$ancho,$altura);  
  } 
 } 
}

$pdf=new Reporte();//creamos el documento pdf
$pdf->AddPage();//agregamos la pagina
$pdf->SetFont("Arial","B",16);//establecemos propiedades del texto tipo de letra, negrita, tamaño
//$pdf->Cell(40,10,'hola mundo',1);
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
    $pdf->Ln(8);
$pdf->gaficoPDF(array('Asistencia'=>array($decodificado2,'red'),'Ausencia'=>array($decodificado3,'blue')),'Grafico',array(5,85,200,150),'Reporte de asistencia');
$pdf->Output();
?>