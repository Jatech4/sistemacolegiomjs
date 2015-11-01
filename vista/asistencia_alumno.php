<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
		Reporte de Asistencia e Inasistencia
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
				<br>
					<form action="crear_boletin.php" method="POST">
						<div class="col-md-4">
							<div class="form-group">
								<label for="#">Seleccione Año Escolar</label>
								<select class="form-control" name="ano_escolar">
									<option value="#" selected disabled>Seleccione</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="#">Seleccione Alumno</label>
								<select class="form-control" name="#">
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
						<div class="box-body">
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>#NoSeQuevaAqui</th>
										<th>#NoSeQuevaAqui</th>
										<th>#NoSeQuevaAqui</th>
										<th>#NoSeQuevaAqui</th>
										<th colspan="2">Acciones</th>
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
										<td class="pad"><a class="btn btn-primary" href="ver_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Ver Registro"><span class="icon-eye"></span></a></td>
										<td class="pad"><a class="btn btn-warning" href="editar_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Editar"><span class="icon-wrench"></span></a></td>
										<!--<td class="pad"><a data-confirm-link="¿Eliminar Boletín?" class="btn btn-danger" href="../controlador/eliminar_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="icon-cross"></span></a></td>-->
										<td class="pad"><a data-confirm-link="¿Imprimir Boletín?" class="btn btn-success" href="../controlador/imprimir_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Imprimir Boletin"><span class="icon-printer"></span></a></td>
										<?php } ?>
									</tbody>
								</table>
								<hr>
								<div class="text-left">
									<form name="form1" id="form1" method="POST" action="#">
										<input type="text" name="consulta" value="#" hidden="hidden">
										<button class="btn btn-danger" href="#" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit"><span class="icon-download2"></span></button>
									</form>
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