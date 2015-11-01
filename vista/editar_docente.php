<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM docentes WHERE id_docente=".$_GET['docente']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
include_once "menu.php";
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Editar Docente?')){
       			document.form.submit()
    			}
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Editar Docente: <?php echo $row['nombre_docente'] ?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/editar_docente.php" onsubmit="enviar()">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['docente'] ?>">
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido</label>
							<input type="nombre" class="form-control" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="20" placeholder="Nombre y Apellido" name="nombre_docente" id="nombre" value="<?php echo $row['nombre_docente'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" id="exampleInputPassword1" onkeypress="return solonumeros2(event)" maxlength="11" placeholder="Cedula" name="ci_docente" id="cedula" value="<?php echo $row['ci_docente'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Correo</label>
							<input type="email" class="form-control" id="exampleInputPassword1" maxlength="30" placeholder="Correo Electronico" name="correo_docente" id="email" value="<?php echo $row['correo_docente'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefono" onkeypress="return solonumeros2(event)" maxlength="12" name="tlfn_docente" id="tlfn_docente" value="<?php echo $row['tlfn_docente'] ?>">
							</div>
							<button type="submit" class="btn btn-warning"><span class="icon-user-plus"></span> Editar</button>
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