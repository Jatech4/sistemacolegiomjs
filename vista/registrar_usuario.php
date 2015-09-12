<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_perfil = mysql_query("SELECT * FROM perfil_usuario");

$result_status = mysql_query("SELECT * FROM status_usuario");
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Usuario?')){
       			document.form.submit()
    			}
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Usuario
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/registrar_usuario.php">
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido</label>
							<input type="nombre" class="form-control" onkeypress="return soloLetras(event)" maxlength="20" id="exampleInputPassword1" placeholder="Nombre y Apellido" name="nombre" id="nombre">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" onkeypress="return solonumeros2(event)" maxlength="11" id="exampleInputPassword1" placeholder="Cedula" name="cedula" id="cedula">
							</div>
							<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="usuario" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Usuario" name="login" id="login">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control pw" id="exampleInputPassword1" autocomplete="off" placeholder="Contraseña" name="password" id="password">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Correo Electronico</label>
							<input type="email" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="usuario@dominio.com" name="email_usuario" id="email_usuario">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Perfil</label>
							<br>
							<select class="form-control" name="perfil" id="perfil">
								<?php while ($row_perfil = mysql_fetch_array($result_perfil)){?>
								<option value="<?php echo $row_perfil['id_perfil']?>"><?php echo $row_perfil['descripcion_perfil'] ?></option>
								<?php } ?>
							</select>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Status</label>
							<br>
							<select class="form-control" name="status" id="status">
								<?php while ($row_status = mysql_fetch_array($result_status)){?>
								<option value="<?php echo $row_status['id_status']?>"><?php echo $row_status['descripcion_status'] ?></option>
								<?php } ?>
							</select>
							</div>
							<button type="button" class="btn btn-success" onClick="enviar()"><span class="icon-user-plus"></span> Registrar</button>
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
<?php
mysql_free_result($result);
mysql_close();
?>