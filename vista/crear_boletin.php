<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT id_boletin, nombres_alumno, apellidos_alumno, nombre_representante, nombre_docente FROM boletines a, alumnos b, representantes c, docentes d, ano_escolar e where a.id_alumno=b.id_alumno and a.id_representante=c.id_representante and a.id_docente=d.id_docente and a.ano_escolar=e.id_ano_escolar");
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
					Administración del Boletín
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="generar_boletin.php" role="button" data-toggle="tooltip" data-placement="top" title="Crear Boletin"><span class="icon-plus"></span></a>
								</div>
								<form action="#">
									<div class="col-md-4">
									<div class="form-group">
										<label for="#">Años Escolares</label>
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
								<div class="box-body">
									<table class="table">
									<caption>Lista de Boletines Registrados en el sistema.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombre Alumno</th>
									<th>Representante del Alumno</th>
									<th>Docente del Alumno</th>
									<th>Año Escolar</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_boletin'] ?></td>
									<td><?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'] ?></td>
									<td><?php echo $row['nombre_representante'] ?></td>
									<td><?php echo $row['nombre_docente'] ?></td>
									<td>2015-2020</td>
									<td class="pad"><a class="btn btn-primary" href="ver_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Ver Registro"><span class="icon-eye"></span></a></td>
									<td class="pad"><a class="btn btn-warning" href="editar_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Editar"><span class="icon-wrench"></span></a></td>
									<!--<td class="pad"><a data-confirm-link="¿Eliminar Boletín?" class="btn btn-danger" href="../controlador/eliminar_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="icon-cross"></span></a></td>-->
									<td class="pad"><a data-confirm-link="¿Imprimir Boletín?" class="btn btn-success" href="../controlador/imprimir_boletin.php?boletin=<?php echo $row['id_boletin']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Imprimir Boletin"><span class="icon-printer"></span></a></td>
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
