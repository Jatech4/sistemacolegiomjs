<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
?>
<!--  Contenido -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Lista de Alumnos</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-body">
						<div class="row">
							<form action="#" method="POST">
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Docente</label>
										<select class="form-control" name="usuario">
										<option value="#" selected disabled>Seleccione</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Año Escolar</label>
										<select class="form-control" name="usuario">
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
								<thead>
									<tr>
										<th align="center">ID</th>
										<th align="center">Nombre Alumno</th>
										<th align="center">Nombre de Docente</th>
										<th align="center">Año Escolar</th>
										<th align="center">Grado</th>
										<th align="center">Seccion</th>
									</tr>
								</thead>
								<tbody>
									<?php if(mysql_num_rows($result)==0){ ?>
									<tr>
										<td>Sin Resultados...</td>
									</tr>
									<?php } ?>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
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