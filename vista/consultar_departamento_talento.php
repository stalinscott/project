<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Logueo</title>
    <!-- IMPORTAMOS LOS ESTILOS DEL FRAMEWORK DE BOOTSTRAP -->
    <link rel="stylesheet" href="../css/menu.css" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme-min-css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/ajax.js"></script>
    <!-- IMPORTAMOS LOS ARCHIVOS JAVASCRIPT DEL FRAMEWORK DE BOOTSTRAP -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/jquery.1.8.1.js"></script>
    <script type="text/javascript" src="../bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/Login.js"></script>
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
<body>
<div class="container-fluid">
<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
        <div class="navbar-collapse collapse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index_talento.php"><img src="../images/1.png" alt="#"/>Inicio </a></li>
                    <li class="active"><a href="departamento_talento.php"><img src="../images/3.png" alt="#"/>Departamento </a></li>
                    <li><a href="administrador_talento.php"><img src="../images/4.png" alt="#"/>Administrador </a></li>
                    <li><a href="empleado_talento.php"><img src="../images/5.png" alt="#"/>Empleado </a></li>
                    <li><a href="asistencia_talento.php"><img src="../images/6.png" alt="#"/>Asistencia </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index_talento.php" class="data-toggle">
                            <i class="glyphicon glyphicon-user"></i>
                            Bienvenido: <?= $_SESSION['nom_rol'];?></a>
                    </li>
                    <li><a href="index.php">Salir </a></li>
                </ul>
            </div>
        </div>
</div>
<br>
        </div>
        <div class="container-fluid">
        <div class="row">
        <div class="col-sm-3 text-left">
<div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="departamento_talento.php"><img src="../images/1.2.png" alt="#"/> Departamento</a></li>
            <li class="active"><a href="consultar_departamento_talento.php"><img src="../images/1.1.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
    <div class="col-sm-9 text-left">
    <h2  align="center">Consultar Departamento</h2>
  <div class="container-fluid">
  <br>
        <!--cargamos los posts-->
        <div id="paginacion"></div>
        <!--cargamos los links-->
        <div class="links"></div>
                </div>
      
    </div>
    </div>
    </div>
        

</body>
</html>