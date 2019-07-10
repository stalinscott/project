
<div class="row">
<div class="col-xs-12 text-left">
		<br>
		</div>
</div>
		<div class="row">
		<div class="col-sm-3 text-left">
<div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
           <li><a href="empleado_talento.php"><img src="../images/1.2.png" alt="#"/> Empleado</a></li>
            <li class="active"><a href="traslado_empleado.php"><img src="../images/1.1.png" alt="#"/> Crear</a></li>
            <li><a href="consultar_traslado.php"><img src="../images/1.2.png" alt="#"/> Consultar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  <div class="col-sm-9 text-left">
                <div class="panel-heading">
        <h2  align="center">Traslado del Empleado</h2>
    </div>
         <div class="media">
            <div class="media-body">
                <form class="form-horizontal" role="form" name="formulario" onSubmit="return validarPasswd()" action="#" method="post">
                     <div class="form-group">
                        <label for="nombre" class="col-lg-3 control-label">
                            Cédula:
                        </label>
                            <div class="col-lg-6">
                                <select class="form-control" name="region" id="region">
                                    <option></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                    </div>
                     <div class="form-group">
                        <label for="nombre" class="col-lg-3 control-label">
                           Nuevo departamento:
                        </label>
                            <div class="col-lg-6">
                                <select class="form-control" name="region" id="region">
                                    <option></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-lg-3 control-label">
                                horario:
                        </label>
                    <div class="col-lg-6">
                        <input class="form-control" id="primer_nom" type="text" name="primer_nom" onClick="primeraletra();" onkeypress="return soloLetras(event)" value="" onkeyup="mayusculainicial(this)">
                        </div>
                    </div>
                   
            <center>
                <br>
                <button type="reset" title="Limpiar" class="btn 
                btn-default" name="reset" value="Limpiar">
                <span class="glyphicon glyphicon-refresh">
                </span> Limpiar
                </button>
                <button type="button" class="btn btn-primary" id="enviarp" name="enviar" value="enviar">Registrar
                </button>
            </center>
        </form>
      </div>
              

        
                    </div><!Fin del Media-Boy>
                </div><!Fin del Media>
             </div><!Fin del Panel-Body>
         </div><!Fin del Panel-Danger>
     </div><!Fin del Col-md y Offset>
</div>
      
    </div>
    </div>
	</div>
		

</body>
</html>
