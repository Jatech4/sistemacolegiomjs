<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
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
										<input type="text" class="form-control" placeholder="Nombre.." name="nombre">
									</div>
									<div class="col-md-5">
										<input type="text" class="form-control" placeholder="Cedula.." name="cedula">
									</div>
										<div class="input-group">
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit" value="buscar" name="buscar"><span class="icon-search"></span></button>
											</span>
										</div><!-- /input-group -->
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
									<?php if($result){
									 while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_alumno'] ?></td>
									<td><?php echo $row['nombres_alumno'] ?></td>
									<td><?php echo $row['apellidos_alumno'] ?></td>
									<td><?php echo $row['cedula_alumno'] ?></td>
									</tr>
									<?php }}else{ ?>
									<tr><td>Sin Resultados...</td></tr>
									<?php }?>
									</tbody>
									</table>
									<div class="text-left">
										<button class="btn btn-danger" href="#" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Descargar"><span class="icon-download2"></span></button>
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