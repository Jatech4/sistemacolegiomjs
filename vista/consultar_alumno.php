<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Reporte de Alumnos
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<div class="col-lg-6">
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="Nombre..">
									</div>
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="Cedula..">
									</div>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button"><span class="icon-search"></span></button>
											</span>
										</div><!-- /input-group -->
									</div><!-- /.col-lg-6 -->
								</div>
								<div class="box-body">
									<table class="table">
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Cedula</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td><?php echo $row['id_alumno'] ?></td>
									<td><?php echo $row['nombres_alumno'] ?></td>
									<td><?php echo $row['apellidos_alumno'] ?></td>
									<td><?php echo $row['cedula_alumno'] ?></td>
									</tr>
									</tbody>
									</table>
									<div class="text-left">
										<a class="btn btn-danger" href="#" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Descargar"><span class="icon-download2"></span></a>
									</div>
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