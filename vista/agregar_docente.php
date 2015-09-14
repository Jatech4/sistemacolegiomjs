<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM docentes");
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
									<a class="btn btn-success" href="registrar_docente.php" role="button" data-toggle="tooltip" data-placement="top" title="Agregar Docente"><span class="icon-plus"></span></a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Docentes Registrados en el sistema.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Cedula</th>
									<th>Correo</th>
									<th>Telefono</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_docente'] ?></td>
									<td><?php echo $row['nombre_docente'] ?></td>
									<td><?php echo $row['ci_docente'] ?></td>
									<td><?php echo $row['correo_docente'] ?></td>
									<td><?php echo $row['tlfn_docente'] ?></td>
									<td class="pad2"><a class="btn btn-primary" href="ver_docentes.php?docente=<?php echo $row['id_docente']?>" role="button" style="border-radius: 0;"><span class="icon-eye" data-toggle="tooltip" data-placement="top" title="Ver Registro"></span></a></td>
									<td class="pad2"><a class="btn btn-warning" href="editar_docente.php?docente=<?php echo $row['id_docente']?>" role="button" style="border-radius: 0;"><span class="icon-wrench" data-toggle="tooltip" data-placement="top" title="Editar"></span></a></td>
									<!--<td class="pad2"><a data-confirm-link="¿Eliminar Docente?" class="btn btn-danger" href="../controlador/eliminar_docente.php?docente=<?php echo $row['id_docente']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="icon-cross"></span></a></td>-->
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