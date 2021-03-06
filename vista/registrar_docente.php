<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Docente?')){
       			document.form.submit()
    			}
			}

			</script>
			<script type="text/javascript">
			function minmax(value, min, max) 
			{
			if(parseInt(value) < min || isNaN(value)) 
			return 1; 
			else if(parseInt(value) > max) 
			return 30000000; 
			else return value;
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Docente
					</h1>
					<br>
					<small><i>(*) Campos Obligatorios</i></small>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/registrar_docente.php" onsubmit="enviar()">
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido (*)</label>
							<input type="nombre" class="form-control" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="20" placeholder="Nombre y Apellido" name="nombre_docente" id="nombre" required>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula (*)</label>
							<input type="text" class="form-control" onkeyup="this.value = minmax(this.value, 1, 30000000)" id="exampleInputPassword1" onkeypress="return solonumeros2(event)" maxlength="10" placeholder="Cedula" name="ci_docente" id="cedula" required>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Correo</label>
							<input type="email" class="form-control" id="exampleInputPassword1" maxlength="30" placeholder="Correo Electronico" name="correo_docente" id="email">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono (*)</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono" onkeypress="return solonumeros2(event)" maxlength="12" name="tlfn_docente" id="tlfn_docente" required>
							</div>
							<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Registrar</button>
							<a class="btn btn-info pull-right" href="agregar_docente.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
							</form>
						</div>
					</div>
				</section>
			</div>
			<!-- Fin de Contenido -->
			<footer class="main-footer">
				<div class="pull-right hidden-xs">
					<b>Version</b> 1.0
				</div>
				Sistema de Inscripci&oacute;n Martin J Sanabria
			</footer>
			<div class='control-sidebar-bg'></div>
		</div>
		<script src="js/jQuery/jQuery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/app.min.js" type="text/javascript"></script>
		<script src="js/demo.js" type="text/javascript"></script>
	</body>
</html>
<?php
mysql_free_result($result);
mysql_close();
?>