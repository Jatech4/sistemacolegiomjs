<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM alumnos WHERE id_alumno=".$_GET['alumno']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
include_once "menu.php"
?>

			<!--  Contenido -->
			<script language="JavaScript"> 
				function enviar(){ 
    			if (confirm('¿Registrar Representnate?')){ 
       			document.form.submit() 
    			} 
			} 	
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Agregar representante al Alumno: <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: <?php echo $row['id_alumno'];?></h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_representante.php">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['alumno'] ?>">
								<h4>A.-AGREGAR REPRESENTANTE</h4>
								<div class="row">
									<div class="col-md-3">
										<label for="exampleInputPassword1">Tipo de Representante</label>
										<select class="form-control" name="tipo_representante" id="#">
										<option value="Padre">Padre</option>
										<option value="Madre">Madre</option>
										<option value="Abuelos">Abuelos</option>
										<option value="Hermanos">Hermanos</option>
										<option value="Tios">Tios</option>
										</select>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombre y Apellido del Representante</label>
								<input type="text" class="form-control" name="nombre_representante" id="exampleInputPassword1" placeholder="Nombre">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula (C.I)</label>
								<input type="text" class="form-control" name="cedula_representante" id="exampleInputPassword1" placeholder="Cedula">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nacionalidad</label>
								<select name="nacionalidad_representante" id="" class="form-control">
									<option value="Venezolana">Venezolana</option>
									<option value="Extranjera">Extranjera</option>
								</select>
							</div>
									</div>
								</div>
								<div class="row">
										<div class="col-md-3">
										<div class="form-group">
										<label>Edad Representante</label>
										<input type="text" class="form-control" name="edad_representante" id="exampleInputPassword1" placeholder="Edad">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 1</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn1_representante" placeholder="Telefono">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 1</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn2_representante" placeholder="Telefono">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Nombre Representante Legal</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="representante_legal">
										</div>
										</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Ocupacion Representante</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="ocupacion_representante">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Lugar de trabajo</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="lugar_trabajo_representante">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono del lugar</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn_lugar_trabajo_representante" placeholder="Telefono">
										</div>
									</div>
									<div class="col-md-3">
										<label>¿Vive con el alumno?</label>
										<br>
										<input type="radio" name="vive_con_alumno" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="vive_con_alumno" id="optionsRadios1" value="No">No
										<br>
										<label>En caso de negarlo, explique</label>
										<input type="text" class="form-control" name="observacion_vive_con_alumno" placeholder="Esto puede ir vacio">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="exampleInputPassword1">Sueldo mensual</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="sueldo_representante">
										</div>
									</div>
								</div>
								<hr class="divisor">
							<button type="button" class="btn btn-success" onClick="enviar()"><span class="icon-user-plus"></span> Registrar</button>
							<a class="btn btn-info pull-right" href="agregar_alumno.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
							</form>
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