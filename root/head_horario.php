<?php 
	session_start();
                    $cedper = $_SESSION['cedper'];
                    $usuario = $_SESSION['usuario'];
                    $depuniadm = $_SESSION['depuniadm'];
                    $ofiuniadm = $_SESSION['ofiuniadm'];
                    $minorguniadm = $_SESSION['minorguniadm'];
                    $uniuniadm = $_SESSION['uniuniadm'];
                    $prouniadm = $_SESSION['prouniadm'];
                    $id_rol = $_SESSION['id_rol'];
                    $nom_rol =$_SESSION['nom_rol'];
                    $nombres = $_SESSION['nombres'];
                    $apellido = $_SESSION['apellido'];
                
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Logueo</title>
	<!-- IMPORTAMOS LOS ESTILOS DEL FRAMEWORK DE BOOTSTRAP -->
          <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../css/menu.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme-min-css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
	<!-- IMPORTAMOS LOS ARCHIVOS JAVASCRIPT DEL FRAMEWORK DE BOOTSTRAP -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.1.8.1.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
	<script language="javascript">

            function validarnumeros(e) {
                key = e.keycode || e.which;
                teclado = String.fromCharCode(key);
                numero = "0123456789";
                especiales = "8-37-38-46";
                teclado_especial = false;

                for (var i in especiales) {
                    if (key == especiales[i]) {
                        teclado_especial = true;
                    }
                }
                if (numero.indexOf(teclado) == -1 && !teclado_especial) {
                    return false;
                }

            }
        </script>
        
</head>
