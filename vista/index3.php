<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_pie.php');
require_once ('../jpgraph/jpgraph_pie3d.php');
 
$data = array(279,15,20);
 
$graph = new PieGraph(300,200);
$graph->SetShadow();
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
$p1 = new PiePlot3D($data);
$p1->SetAngle(20);
$p1->SetSize(0.5);
$p1->SetCenter(0.45);
 
$graph->Add($p1);
$graph->Stroke();
 
?>