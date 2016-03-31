<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_ano_escolar = mysql_query("SELECT * FROM ano_escolar ORDER BY id_ano_escolar DESC");
$ano_escolar_select=$row_ultimo_ano_escolar['id_ano_escolar'];
$result_alumno_select = mysql_query("SELECT * FROM alumnos");
if(isset($_POST['buscar'])){

$sql="SELECT id_boletin, nombres_alumno, apellidos_alumno,e.ano_escolar, asistencias_momento1, inasistencias_momento1, asistencias_momento2, inasistencias_momento2, asistencias_momento3, inasistencias_momento3, asistencias_momento4, inasistencias_momento4 FROM boletines a, alumnos b, representantes c, ano_escolar e where a.id_alumno=b.id_alumno and a.id_representante=c.id_representante and a.ano_escolar=e.id_ano_escolar and e.id_ano_escolar=".$_POST['ano_escolar']."";
if($_POST['alumno']!=''){
	$sql.=" and b.id_alumno=".$_POST['alumno']."";
}
if($_POST['grado']!=''){
	$sql.=" and a.grado=".$_POST['grado']."";
}
$result = mysql_query($sql);
}
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
					<form action="asistencia_alumno.php" method="POST">
						<div class="col-md-4">
							<div class="form-group">
								<label for="#">Seleccione Año Escolar</label>
								<select class="form-control" name="ano_escolar" required>
							<option value="" selected disabled>Seleccione</option>
							<?php while ($row_ano_escolar = mysql_fetch_array($result_ano_escolar)){?>
							<option value="<?php echo $row_ano_escolar['id_ano_escolar']?>"><?php echo $row_ano_escolar['ano_escolar']?></option>
							<?php } ?>
							</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="#">Seleccione Alumno</label>
								<select class="form-control" name="alumno">
									<option value="" selected>Seleccione</option>
									<?php while ($row_alumno = mysql_fetch_array($result_alumno_select)){?>
									<option value="<?php echo $row_alumno['id_alumno']?>"
									><?php echo $row_alumno['nombres_alumno']." ".$row_alumno['apellidos_alumno'] ?></option>
							<?php } ?>
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
										<th>Nombre</th>
										<th>A&ntilde;o Escolar</th>
										<th>Momento</th>
										<th>Asistencias</th>
										<th>Inasistencias</th>
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
										<td rowspan="4" style="vertical-align:middle"><?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'] ?></td>
										<td rowspan="4" style="vertical-align:middle"><?php echo $row['ano_escolar'] ?></td>
										<td>I</td>
										<td><?php echo $row['asistencias_momento1'] ?></td>
										<td><?php echo $row['inasistencias_momento1'] ?></td>
									</tr>
									<tr>
										<td>II</td>
										<td><?php echo $row['asistencias_momento2'] ?></td>
										<td><?php echo $row['inasistencias_momento2'] ?></td>
									</tr>
									<tr>
										<td>III</td>
										<td><?php echo $row['asistencias_momento3'] ?></td>
										<td><?php echo $row['inasistencias_momento3'] ?></td>
									</tr>
									<tr>
										<td>IV</td>
										<td><?php echo $row['asistencias_momento4'] ?></td>
										<td><?php echo $row['inasistencias_momento4'] ?></td>
									</tr>
										<?php } ?>
									</tbody>
								</table>
								<hr>
								<div class="text-left">
									<form name="form1" id="form1" method="POST" action="../controlador/asistencia_alumno.php">
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
			Sistema de Inscripci&oacute;n Martin J Sanabria
		</footer>
		<div class='control-sidebar-bg'></div>
	</div>
	<script src="js/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/app.min.js" type="text/javascript"></script>
	<script src="js/demo.js" type="text/javascript"></script>
</body>
</html>