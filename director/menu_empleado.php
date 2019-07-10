<body>
<div class="container-fluid">
<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
		<div class="navbar-collapse collapse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index_director.php"><img src="../images/1.png" alt="#"/>Inicio </a></li>
					<li><a href="administrador_director.php"><img src="../images/4.png" alt="#"/>Administrador </a></li>
					<li   class="active"><a href="empleado_director.php"><img src="../images/5.png" alt="#"/>Empleado </a></li>
					<li><a href="asistencia_director.php"><img src="../images/6.png" alt="#"/>Asistencia </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="../images/campana.png" alt="#" onClick="location.reload(false);"/><span class="badge badge-light"">
	<div id="seccionRecargar"></div><?php

        echo "<ul class='dropdown-menu'><center><a onClick='location.reload(false);'></a></center>";
      echo " <center>
              <a href='notifiacion_php.php' '><button type='button' class='btn btn-link'>Ver Notificaciones</button></a></center>
            </ul> </td></tr>";
  


            ?>
					</span></a>
					
            </li>
          			<li><a href="index_director.php" class="data-toggle">
							<i class="glyphicon glyphicon-user"></i>
							Bienvenido: <?= $_SESSION['nom_rol'];?></a></li>
					<li><a href="index.php">Salir</a></li>
				</ul>
			</div>
		</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		setInterval(
				function(){
					$('#seccionRecargar').load('../director/notificacion.php');
				},2000
			);
	});
</script>
<script>

function reload(segs) {

    setTimeout(function() {

        location.reload();

    }, parseInt(segs) * 1000);

}

</script>