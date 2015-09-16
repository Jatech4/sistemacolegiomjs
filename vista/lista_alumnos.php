<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$buscar="";
$ultimo_ano_escolar = mysql_query("SELECT * FROM ano_escolar ORDER BY id_ano_escolar DESC limit 1");
$row_ultimo_ano_escolar = mysql_fetch_array($ultimo_ano_escolar);
$ano_escolar_select=$row_ultimo_ano_escolar['id_ano_escolar'];
if(isset($_POST['buscar'])){
	if(isset($_POST['docente']) && $_POST['docente']!=''){
		$buscar.=" AND d.id_docente =".$_POST['docente']."";
	}
	if(isset($_POST['ano_escolar']) && $_POST['ano_escolar']!=''){
	$ano_escolar_select=$_POST['ano_escolar'];
	}
}
echo $sql="SELECT * FROM alumnos a, boletines b, ano_escolar c, docentes d WHERE b.id_alumno=a.id_alumno AND b.id_docente=d.id_docente AND b.ano_escolar=c.id_ano_escolar AND c.id_ano_escolar=$ano_escolar_select ".$buscar."";
$result = mysql_query($sql);
$result_docentes = mysql_query("SELECT * FROM docentes");
$result_ano_escolar = mysql_query("SELECT * FROM ano_escolar ORDER BY id_ano_escolar DESC");
mysql_set_charset('utf8');
?>
<!--  Contenido -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Lista de Alumnos</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-body">
						<div class="row">
							<form action="#" method="POST">
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Docente</label>
										<select class="form-control" name="docente" id="docente">
											<option value="" selected >Seleccione</option>
											<?php while ($row_docente = mysql_fetch_array($result_docentes)){?>
											<option value="<?php echo $row_docente['id_docente']?>" <?php if($row_docente['id_docente']==$_POST['docente']) {echo "selected='selected'";}?>><?php echo $row_docente['nombre_docente']?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label for="#">Grado</label>
										<select class="form-control" name="#" id="#">
											<option value="" selected >Seleccione</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Año Escolar</label>
										<select class="form-control" name="ano_escolar">
											<option value="" selected >Seleccione</option>
											<?php while ($row_ano_escolar = mysql_fetch_array($result_ano_escolar)){?>
											<option value="<?php echo $row_ano_escolar['id_ano_escolar']?>" <?php if($row_ano_escolar['id_ano_escolar']==$ano_escolar_select) {echo "selected='selected'";}?>><?php echo $row_ano_escolar['ano_escolar']?></option>
											<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label for="#">Seccion</label>
										<select class="form-control" name="#" id="#">
											<option value="" selected >Seleccione</option>
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
										<div class="input-group" style="
											margin-top: -19%;
											margin-left: 37%;
											">
											<span class="input-group-btn">
												<a href="#" class="btn btn-default">Mostrar todos</a>
											</span>
											</div><!-- /input-group -->
										</div>
									</form>
								</div>
								<table class="table">
									<thead>
										<tr>
											<th align="center">ID</th>
											<th align="center">Nombre Alumno</th>
											<th align="center">Nombre de Docente</th>
											<th align="center">Año Escolar</th>
											<th align="center">Grado</th>
											<th align="center">Seccion</th>
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
											<td><?php echo $row['id_boletin'] ?></td>
											<td><?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'] ?></td>
											<td><?php echo $row['nombre_docente'] ?></td>
											<td><?php echo $row['ano_escolar'] ?></td>
											<td><?php echo $row['grado'] ?></td>
											<td><?php echo $row['seccion'] ?></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<hr>
								<div class="text-left">
									<form name="form1" id="form1" method="POST" action="../controlador/reporte_docente.php">
										<input type="text" name="consulta" value="<?php echo $sql;?>" hidden="hidden">
										<button class="btn btn-danger" href="#" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Descargar" type="submit"><span class="icon-download2"></span></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
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