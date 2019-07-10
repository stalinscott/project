<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<html lang=es>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/sintillo.css" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/Login.js"></script>
<script type="text/javascript" src="../js/Login1.js"></script>
<title>SCDA</title>
</head>

<body>
<div class="container-fluid">
      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-6 well">
      <header><img src="../images/asistencia.jpg" border="0"  class="banner" ></header>
      <br>
        <form action="" name="f1" method="post">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" id="usuario" class="form-control" placeholder="Usuario">
          </div><br/>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" id="contrasena" class="form-control" placeholder="Contraseña">
          </div><br/>
          <div class="input-group">
            <button type = "button" class="btn btn-primary" id="Iniciar" > Iniciar Sesión </button>
          </div>
          <div  id="mensaje">
        
        </div>
        </form>
        
      </div>  
</div> 

</body>
</html>
