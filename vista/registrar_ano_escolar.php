<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM ano_escolar");
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
					Administración Año Escolar
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="generar_ano_escolar.php" role="button" data-toggle="tooltip" data-placement="top" title="Registrar"><span class="icon-plus"></span></a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Años escolares registrados.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Desde - Hasta</th>
									<!--<th colspan="2">Acciones</th>-->
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
									<td><?php echo $row['id_ano_escolar'] ?></td>
									<td><?php echo $row['ano_escolar'] ?></td>
									<td class="pad"><a class="btn btn-info" href="fecha_momento.php" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Agregar Momentos"><span class="icon-plus"></span></a></td>
									<!--<td><a data-confirm-link="¿Eliminar Año?" class="btn btn-danger" href="../controlador/eliminar_ano_escolar.php?ano=<?php echo $row['id_ano_escolar']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar"><span class="icon-cross"></span></a></td>-->
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