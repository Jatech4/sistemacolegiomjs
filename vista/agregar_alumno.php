<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "menu.php"
?>
			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Alumno
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_alumno.php" role="button"><span class="icon-plus"></span>  Agregar</a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Alumnos Registrados en el sistema.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Cedula</th>
									<th>Edad</th>
									<th>Sexo</th>
									<th>Lugar de Nacimiento</th>
									<th>Fecha de Nacimiento</th>
									<th>Dirección</th>
									<th>Telefonos</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><a class="btn btn-warning" href="editar_alumno.php" role="button" style="border-radius: 0;"><span class="icon-wrench"></span> Editar</a></td>
									<td><a class="btn btn-danger" href="#" role="button" style="border-radius: 0;"><span class="icon-cross"></span> Eliminar</a></td>
									</tr>
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