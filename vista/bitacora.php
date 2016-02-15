<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$buscar='';
if(isset($_POST['buscar'])){
	$desde=date("d-m-Y", strtotime($_POST['desde']));
	$hasta=date("d-m-Y", strtotime($_POST['hasta']));
	if(isset($_POST['usuario'])){
		$buscar="AND b.id_usuario=".$_POST['usuario']."";
	}
}else{
	$desde=date('d-m-Y');
	$hasta=date('d-m-Y');
}
$sql="SELECT * FROM usuarios a, bitacora b WHERE a.id_usuario=b.id_usuario AND b.fecha BETWEEN '".$desde." 00:00:00' AND '".$hasta." 23:59:59' ".$buscar." ORDER BY id_bitacora";
$result = mysql_query($sql);
$result_usuarios = mysql_query("SELECT * FROM usuarios ORDER BY nombre_usuario");
mysql_set_charset('utf8');
?>
<!--  Contenido -->
<div class="content-wrapper">
	<section class="content-header">
		<h1>Bitacora</h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-danger">
					<div class="box-body">
						<div class="row">
							<form action="bitacora.php" method="POST">
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleInputPassword1">Desde:</label>
										<input type="date" class="form-control" name="desde" id="exampleInputPassword1" value="<?php echo date('Y-m-d', strtotime($desde));?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="#">Hasta:</label>
										<input type="date" class="form-control" name="hasta" id="exampleInputPassword1" value="<?php echo date('Y-m-d', strtotime($hasta));?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="#">Lista de Usuarios</label>
										<select class="form-control" name="usuario">
											<option value="#" selected disabled>Seleccione</option>
											<?php while ($row_usuarios = mysql_fetch_array($result_usuarios)){?>
											<option value="<?php echo $row_usuarios['id_usuario']?>" <?php if($row_usuarios['id_usuario']==$_POST['usuario']) {echo "selected='selected'";}?>><?php echo $row_usuarios['nombre_usuario'] ?></option>
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
										<div class="input-group" style="
											margin-top: -19%;
											margin-left: 33%;
											">
											<span class="input-group-btn">
												<a href="bitacora.php" class="btn btn-default">Mostrar todos</a>
											</span>
											</div><!-- /input-group -->
										</div>
									</div>
								</form>
							</div>
							<table class="table">
								<caption>Lista de Usuarios Registrados y su Fecha de Conexión.</caption>
								<thead>
									<tr>
										<th align="center">N°</th>
										<th align="center">Nombre Usuario</th>
										<th align="center">Fecha de Conexión</th>
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
										<td><?php echo $row['id_bitacora'] ?></td>
										<td><?php echo $row['nombre_usuario'] ?></td>
										<td>
											<?php
											$fecha = $row['fecha'];
											$arr = array(
											'January' => 'Enero',
											'February' => 'Febrero',
											'March' => 'Marzo',
											'April' => 'Abril',
											'May' => 'Mayo',
											'June' => 'Junio',
											'July' => 'Julio',
											'August' => 'Agosto',
											'September' => 'Septiembre',
											'October' => 'Octubre',
											'November' => 'Noviembre',
											'December' => 'Diciembre'
											);
											$mes = $arr[date('F', strtotime($fecha))];
											setlocale(LC_ALL,"es_ES");
											echo date('d' , strtotime($fecha))." de ".$mes." del ".date('Y').", A la hora: ".date('G:ia');
											?>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<hr>
							<div class="text-left" style="    margin-left: 1%;
								padding-bottom: 1%;">
								<form name="form1" id="form1" method="POST" action="../controlador/reporte_bitacora.php">
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