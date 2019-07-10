<?php 
date_default_timezone_set('America/La_Paz');
$hora= date ("g:ia");
$fecha= date ("d/m/Y");

	session_start();
                    $cedper = $_SESSION['cedper'];
                    $usuario = $_SESSION['usuario'];
                    $depuniadm = $_SESSION['depuniadm'];
                    $ofiuniadm = $_SESSION['ofiuniadm'];
                    $minorguniadm = $_SESSION['minorguniadm'];
                    $uniuniadm = $_SESSION['uniuniadm'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Logueo</title>
	<!-- IMPORTAMOS LOS ESTILOS DEL FRAMEWORK DE BOOTSTRAP -->
	<link rel="stylesheet" href="../css/menu.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme-min-css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<!-- IMPORTAMOS LOS ARCHIVOS JAVASCRIPT DEL FRAMEWORK DE BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="../css/tcal.css" />
	<script type="text/javascript" src="../js/tcal.js"></script> 
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.1.8.1.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/insert_jornada.js"></script>
</head>

<body>
