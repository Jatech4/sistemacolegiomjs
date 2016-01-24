<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM usuarios, perfil_usuario, status_usuario WHERE perfil_usuario=id_perfil AND status_usuario=id_status AND id_usuario=".$_GET['usuario']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);

$result_perfil = mysql_query("SELECT * FROM perfil_usuario");

$result_status = mysql_query("SELECT * FROM status_usuario");
include_once "menu.php"
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Modificar Datos?')){
       			document.form.submit()
    			}
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Editar Usuario
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<form name="form" id="form" method="POST" action="../controlador/editar_usuario.php" onsubmit="enviar()">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['usuario'] ?>">
							<div class="form-group">
							<label for="exampleInputPassword1">Nombre y Apellido</label>
							<input type="nombre" class="form-control" onkeypress="return soloLetras(event)" maxlength="20" id="exampleInputPassword1" placeholder="Nombre y Apellido" name="nombre" id="nombre" value="<?php echo $row['nombre_usuario'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Cedula</label>
							<input type="text" class="form-control" onkeypress="return solonumeros2(event)" maxlength="11" id="exampleInputPassword1" placeholder="Cedula" name="cedula" id="cedula" value="<?php echo $row['cedula_usuario'] ?>" required>
							</div>
							<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="usuario" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Usuario" name="login" id="login" value="<?php echo $row['login_usuario'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Contraseña</label>
							<input type="password" class="form-control pw" id="exampleInputPassword1" autocomplete="off" placeholder="Contraseña" name="password" id="password" value="<?php echo $row['pass_usuario'] ?>">
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Correo Electronico</label>
							<input type="email" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="usuario@dominio.com" name="email_usuario" id="email_usuario" value="<?php echo $row['email_usuario'] ?>">
							</div>
							<?php  ?>
							<div class="form-group" <?php if($_SESSION['perfilusuario']!=1){ echo "style='visibility:hidden'"; }?>>
							<label for="exampleInputPassword1">Perfil</label>
							<br>
							<select class="form-control" name="perfil" id="perfil">
								<?php while ($row_perfil = mysql_fetch_array($result_perfil)){?>
								<option value="<?php echo $row_perfil['id_perfil']?>" <?php if($row_perfil['id_perfil']==$row['id_perfil']) {echo "selected='selected'";}?>><?php echo $row_perfil['descripcion_perfil'] ?></option>
								<?php } ?>
							</select>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Status</label>
							<br>
							<select class="form-control" name="status" id="status">
								<?php while ($row_status = mysql_fetch_array($result_status)){?>
								<option value="<?php echo $row_status['id_status']?>" <?php if($row_status['id_status']==$row['id_status']) {echo "selected='selected'";}?>><?php echo $row_status['descripcion_status'] ?></option>
								<?php } ?>
							</select>
							</div>
							<div class="form-group">
							<label for="exampleInputPassword1">Sexo: (*)</label>
							<select class="form-control" name="sexo_usuario" id="sexo_usuario" required>
								<option value="" selected disabled>Seleccione</option>
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
							</div>
							<button type="submit" class="btn btn-warning"><span class="icon-scissors"></span> Editar</button>
							<?php if($_SESSION['perfilusuario']==1){ ?>
							<a class="btn btn-info pull-right" href="agregar_usuario.php" role="button"><span class="icon-undo2"></span> Agregar</a>
							<?php }elseif($_SESSION['perfilusuario']!=1){?>
							<a class="btn btn-info pull-right" href="index.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
							<?php }?>
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