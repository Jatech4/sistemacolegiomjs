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
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Docente
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/registrar_docente.php">
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido</label>
							<input type="nombre" class="form-control" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="20" placeholder="Nombre y Apellido" name="nombre_docente" id="nombre">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" id="exampleInputPassword1" onkeypress="return solonumeros2(event)" maxlength="10" placeholder="Cedula" name="ci_docente" id="cedula">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Correo</label>
							<input type="email" class="form-control" id="exampleInputPassword1" maxlength="30" placeholder="Correo Electronico" name="correo_docente" id="email">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono" onkeypress="return solonumeros2(event)" maxlength="12" name="tlf_docente" id="#">
							</div>
							<button type="button" class="btn btn-success" onClick="enviar()"><span class="icon-user-plus"></span> Registrar</button>
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
				{Nombre Sistema}
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