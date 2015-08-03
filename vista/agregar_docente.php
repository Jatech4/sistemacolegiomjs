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
					Registrar Docente
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_docente.php" role="button"><span class="icon-plus"></span>  Agregar</a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Docentes Registrados en el sistema.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Cedula</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<tr>
									<td></td>
									<td></td>
									<td></td>
									<td class="pad2"><a class="btn btn-primary" href="#" role="button" style="border-radius: 0;"><span class="icon-eye"></span> Ver Registro</a></td>
									<td class="pad2"><a class="btn btn-warning" href="#" role="button" style="border-radius: 0;"><span class="icon-wrench"></span> Editar</a></td>
									<td class="pad2"><a data-confirm-link="¿Eliminar Docente?" class="btn btn-danger" href="#" role="button" style="border-radius: 0;"><span class="icon-cross"></span> Eliminar</a></td>
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