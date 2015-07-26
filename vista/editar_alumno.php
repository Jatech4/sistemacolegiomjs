<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "menu.php"
?>

			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Editar Alumno
					</h1>
					<small><i>Registrar Alumnos en el sistema, para luego inscribir y generar boletín.</i></small>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form>
							<div class="form-group">
							<label for="exampleInputPassword1">Nombres</label>
							<input type="text" class="form-control" name="nombres_alumno" id="exampleInputPassword1" placeholder="Nombres">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Apellidos</label>
							<input type="text" class="form-control" name="apellidos_alumno" id="exampleInputPassword1" placeholder="Apellidos">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" name="cedula_alumno" id="exampleInputPassword1" placeholder="Cedula">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Edad</label>
							<input type="text" class="form-control" name="edad_alumno" id="exampleInputPassword1" placeholder="Edad">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Sexo</label>
							<select class="form-control" name="sexo_alumno" id="#">
								<option value="1">Masculino</option>
								<option value="2">Femenino</option>
							</select>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Lugar de Nacimiento</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="lugar_nac_alumno" placeholder="Lugar de Nacimiento">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha nacimiento alumno</label>
							<input type="date" class="form-control" id="exampleInputPassword1" name="fecha_nac_alumno" placeholder="Fecha">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Dirección</label>
							<textarea name="direccion_alumno" id="" cols="84" rows="10"></textarea>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono 1</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf1_alumno" placeholder="Telefono">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono 2</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" placeholder="Telefono">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Telefono 3</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" placeholder="Telefono">
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