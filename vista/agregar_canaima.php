<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$sql="SELECT * FROM alumnos LEFT JOIN canaimas ON alumnos.id_alumno=canaimas.id_alumno WHERE alumnos.id_alumno=".$_GET['alumno']."";
$result_alumno = mysql_query($sql);

$sql="SELECT * FROM modelos_canaimas";
$result_modelos = mysql_query($sql);

$row = mysql_fetch_array($result_alumno);
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Canaima?')){
       			document.form.submit()
    			}
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Canaima<br>Alumno: <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
					<br>
					<small><i>(*) Campos Obligatorios</i></small>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/registrar_canaima.php" onsubmit="enviar()">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['alumno'] ?>">
							<div class="form-group">
							<label for="exampleInputPassword1">Serial (*)</label>
							<input type="nombre" class="form-control" maxlength="20" id="exampleInputPassword1" placeholder="Serial Canaima" name="serial" id="serial" value="<?php echo $row['serial_canaima'] ?>" required>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Modelo (*)</label>
							<br>
							<select class="form-control" name="modelo" id="modelo" required>
								<option value="">...</option>
								<?php while ($row_modelos = mysql_fetch_array($result_modelos)){?>
								<option value="<?php echo $row_modelos['id_modelo']?>"<?php if($row['modelo_canaima']==$row_modelos['id_modelo']) {echo "selected='selected'";}?>><?php echo $row_modelos['nombre_modelo']." ".$row_modelos['serial_modelo'] ?></option>
								<?php } ?>
							</select>
							</div>
							<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Registrar</button>
							<a class="btn btn-info pull-right" href="agregar_alumno.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
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
//mysql_free_result($result);
mysql_close();
?>