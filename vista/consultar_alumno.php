<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$buscar="nombres_alumno<>''";
if(isset($_POST['buscar'])){
	if(isset($_POST['nombre']) && $_POST['nombre']!=''){
		$buscar.=" AND nombres_alumno like '%".$_POST['nombre']."%'";
	}
	if(isset($_POST['cedula']) && $_POST['cedula']!=''){
		$buscar.=" AND cedula_alumno = '".$_POST['cedula']."'";
	}
	$sql="SELECT * FROM alumnos WHERE ".$buscar."";
}else{
	$sql="SELECT * FROM alumnos ";
}
$result = mysql_query($sql);
mysql_set_charset('utf8');
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
		Reporte de Alumnos
		</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-header">
						<form name="form1" id="form1" method="POST" >
							<div class="col-lg-6">
								<div class="col-md-5">
									<input type="text" class="form-control" placeholder="Nombre.." onkeypress="return soloLetras(event)" maxlength="20" name="nombre" value="<?php echo $_POST['nombre']?>">
								</div>
								<div class="col-md-5">
									<input type="text" class="form-control" placeholder="Cedula.." name="cedula" onkeypress="return solonumero2(event)" maxlength="11" value="<?php echo $_POST['cedula']?>">
								</div>
								<div class="col-md-2">
									<div class="input-group">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit" value="buscar" name="buscar"><span class="icon-search"></span></button>
										</span>
										</div><!-- /input-group -->
										<div class="input-group" style="
											margin-top: -56%;
											margin-left: 90%;
											">
											<span class="input-group-btn">
												<a href="consultar_alumno.php" class="btn btn-default">Mostrar todos</a>
											</span>
											</div><!-- /input-group -->
										</div>
									</div>

									</div><!-- /.col-lg-6 -->
								</form>
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
										<?php if(mysql_num_rows($result)==0){ ?>
										<tr>
											<td>Sin Resultados...</td>
										</tr>
										<?php } ?>
										<?php  while ($row = mysql_fetch_array($result)){?>
										<tr>
											<td><?php echo $row['id_alumno'] ?></td>
											<td><?php echo $row['nombres_alumno'] ?></td>
											<td><?php echo $row['apellidos_alumno'] ?></td>
											<td><?php echo $row['cedula_alumno'] ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<div class="text-left">
									<form name="form2" id="form2" method="POST" action="../controlador/reporte_alumnos.php">
										<input type="text" name="consulta" value="<?php echo $sql;?>" hidden="hidden">
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