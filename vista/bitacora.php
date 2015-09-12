<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result = mysql_query("SELECT * FROM usuarios a, bitacora b WHERE a.id_usuario=b.id_usuario");
mysql_set_charset('utf8');

?>

			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>Bitacora</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-body">
									<table class="table">
									<caption>Lista de Usuarios Registrados y su Fecha de Conexión.</caption>
									<thead>
									<tr>
									<th align="center">ID</th>
									<th align="center">Nombre Usuario</th>
									<th align="center">Login</th>
									<th align="center">Fecha de Conexión</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_bitacora'] ?></td>
									<td><?php echo $row['nombre_usuario'] ?></td>
									<td><?php echo $row['login_usuario'] ?></td>
									<td><?php echo $row['fecha'] ?></td>
									</tr>
									<?php } ?>
									</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
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
