<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
		<div class="navbar-collapse collapse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index_empleado.php"><img src="../images/1.png" alt="#"/> Inicio </a></li>
					<li><a href="asistencia_empleado.php"><img src="../images/6.png" alt="#"/> Asistencia </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="index_empleado.php" class="data-toggle">
							<i class="glyphicon glyphicon-user"></i>
							Bienvenido: <?= $_SESSION['nombres'];?> <?= $_SESSION['apellido'];?>
						 </a>
					</li>
					<li><a href="index.php">Salir </a></li>
				</ul>
			</div>
		</div>
</div>