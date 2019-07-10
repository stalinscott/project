<div class="navbar navbar-inverse navbar-fixed-top" rol="navigation">
		<div class="navbar-collapse collapse">
			<div class="container-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index_administrador.php"><img src="../images/1.png" alt="#"/> Inicio </a></li>
					<li><a href="empleado_administrador.php"><img src="../images/5.png" alt="#"/> Empleado </a></li>
					<li   class="active"><a href="asistencia_administrador.php"><img src="../images/6.png" alt="#"/> Asistencia </a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="index_administrador.php" class="data-toggle">
							<i class="glyphicon glyphicon-user"></i>
							Bienvenido: <?= $_SESSION['nom_rol'];?></a>
					</li>
					<li><a href="index.php">Salir </a></li>
				</ul>
			</div>
		</div>
</div>