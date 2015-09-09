<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM docentes WHERE id_docente=".$_GET['docente']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
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
					Ver Registro de Docente: <?php echo $row['nombre_docente'] ?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
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
									</tr>
									</thead>
									<tbody>
									<tr>
									<td><?php echo $row['id_docente'] ?></td>
									<td><?php echo $row['nombre_docente'] ?></td>
									<td><?php echo $row['ci_docente'] ?></td>
									<td><?php echo $row['correo_docente'] ?></td>
									<td><?php echo $row['tlfn_docente'] ?></td>
									</tr>
									</tbody>
									</table>
									<a class="btn btn-info pull-right" href="agregar_docente.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
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