<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM alumnos a, procedencia_alumno b, documentos_presentados c, situacion_economica d, salud_alumno e WHERE a.id_alumno=b.id_alumno AND a.id_alumno=c.id_alumno AND a.id_alumno=d.id_alumno AND a.id_alumno=e.id_alumno");
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
					Registrar Alumno
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_alumno.php" role="button" data-toggle="tooltip" data-placement="top" title="Registrar Alumno"><span class="icon-plus"></span></a>
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
									<th>N° de Representantes</th>
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
									<td><?php echo $row['id_alumno'] ?></td>
									<td><?php echo $row['nombres_alumno'] ?></td>
									<td><?php echo $row['apellidos_alumno'] ?></td>
									<td><?php echo $row['cedula_alumno'] ?></td>
									<td><?php echo mysql_num_rows(mysql_query("SELECT id_representante FROM representantes WHERE id_alumno=".$row['id_alumno'].""));?></td>
									<td class="pad"><a class="btn btn-primary" href="ver_representante.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Ver Representantes"><span class="icon-eye"></span></a></td>
									<td class="pad"><a class="btn btn-info" href="agregar_representante.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Agregar Representantes"><span class="icon-plus"></span></a></td>
									<td class="pad"><a class="btn btn-primary" href="ver_alumno.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Ver Alumno"><span class="icon-eye"></span></a></td>
									<td class="pad"><a class="btn btn-warning" href="editar_alumno.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Editar Alumno"><span class="icon-wrench"></span></a></td>
									<td class="pad"><a class="btn btn-warning" href="agregar_canaima.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Agregar Canaima"><span class="icon-plus"></span></a></td>
									<td class="pad"><a data-confirm-link="¿Imprimir Inscripción?" class="btn btn-success" href="../controlador/imprimir_inscripcion.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Imprimir Inscripción"><span class="icon-printer"></span></a></td>
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