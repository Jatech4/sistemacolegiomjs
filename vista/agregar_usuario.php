<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM usuarios, perfil_usuario, status_usuario WHERE perfil_usuario=id_perfil AND status_usuario=id_status");
mysql_set_charset('utf8');
include_once "menu.php"
?>
			<!--  Contenido -->
			<script type="text/javascript" src="js/confirm-link.js"></script>
			<script type="text/javascript">
    			$(document).ready(function () {
    			$('a[data-confirm-link]').click(function () {
    			if (confirm($(this).data('confirm-link')))
    			window.location = $(this).attr('href');
    			return false;
    			});
    		});
			</script>

			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Usuario
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_usuario.php" role="button" data-toggle="tooltip" data-placement="top" title="Registrar Usuario"><span class="icon-plus"></span></a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Usuarios Registrados.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Cedula</th>
									<th>Usuario</th>
									<th>Contraseña</th>
									<th>Nombre y Apellido</th>
									<th>Perfil</th>
									<th>Email</th>
									<th>Status</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_usuario'] ?></td>
									<td><?php echo $row['cedula_usuario'] ?></td>
									<td><?php echo $row['login_usuario'] ?></td>
									<td class="pw"><?php echo $row['pass_usuario'] ?></td>
									<td><?php echo $row['nombre_usuario'] ?></td>
									<td><?php echo $row['descripcion_perfil'] ?></td>
									<td><?php echo $row['email_usuario'] ?></td>
									<td><?php echo $row['descripcion_status'] ?></td>
									<td class="pad"><a class="btn btn-warning" href="editar_usuario.php?usuario=<?php echo $row['id_usuario']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Editar"><span class="icon-wrench"></span></a></td>
									<td class="pad"><a data-confirm-link="¿Eliminar Usuario?" class="btn btn-danger" href="../controlador/eliminar_usuario.php?usuario=<?php echo $row['id_usuario']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="icon-cross"></span></a></td>
									</tr>
									<?php } ?>
									</tbody>
									</table>
								</div>
							</div>
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