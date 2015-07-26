<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "menu.php"
?>
			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Usuario
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form>
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido</label>
							<input type="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre y Apellido">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Cedula">
							</div>
							<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="usuario" class="form-control" id="exampleInputEmail1" placeholder="Usuario">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Perfil</label>
							<br>
							<select class="form-control" name="#" id="#">
								<option value="1">Administrador</option>
								<option value="2">Profesor</option>
							</select>
							</div>
							<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Registrar</button>
							<a class="btn btn-info pull-right" href="agregar_usuario.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
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