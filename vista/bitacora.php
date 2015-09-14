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
						<div class="row">
							<form action="#">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputPassword1">Desde:</label>
										<input type="date" class="form-control" name="fecha_desde_momento1" id="exampleInputPassword1">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="#">Hasta:</label>
										<input type="date" class="form-control" name="fecha_hasta_momento1" id="exampleInputPassword1">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Lista de Usuarios</label>
										<select class="form-control">
											<option value="#" selected disabled>Seleccione</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<div class="input-group" style="
										margin-top: 18%;
										">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit" value="buscar" name="buscar"><span class="icon-search"></span></button>
										</span>
										</div><!-- /input-group -->
									</div>
									
								</form>
							</div>
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