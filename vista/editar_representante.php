<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM representantes a, alumnos b WHERE a.id_alumno=b.id_alumno AND b.id_alumno=".$_GET['alumno']." AND a.id_representante=".$_GET['representante']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
include_once "menu.php";
?>

			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Modificar Datos?')){
       			document.form.submit()
    			}
			}

			function calcAge(birthday)
			{
			    var year, month, day, age, year_diff, month_diff, day_diff;
			    var myBirthday = new Date();
			    var today = new Date();
			    var array = birthday.split("-");

			    year = array[0];
			    month = array[1];
			    day = array[2];

			    year_diff = today.getFullYear() - year;
			    month_diff = (today.getMonth() + 1) - month;
			    day_diff = today.getDate() - day;

			    if (month_diff < 0) {
			        year_diff--;
			    } else if ((month_diff === 0) && (day_diff < 0)) {
			        year_diff--;
			    }

			    if(year_diff<1){
			    alert('Seleccionar un año menor al Actual')
			    document.getElementById('edad_representante').value =  '';
			    document.getElementById('fecha_nac_representante').value =  '';
			    exit;
			    }
			    document.getElementById('edad_representante').value =  year_diff;
			    return year_diff;

			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Editar representante al Alumno: <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: <?php echo $row['id_alumno'];?></h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/editar_representante.php" onsubmit="enviar()">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id_representante" id="id_representante" value="<?php echo $_GET['representante'] ?>">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id_alumno" id="id_alumno" value="<?php echo $_GET['alumno'] ?>">
								<h4>A.-AGREGAR REPRESENTANTE</h4>
								<div class="row">
									<div class="col-md-3">
										<label for="exampleInputPassword1">Tipo de Representante</label>
										<select class="form-control" name="tipo_representante" id="#">
										<option value="Padre" <?php if($row['tipo_representante']=='Padre') {echo "selected='selected'";}?>>Padre</option>
										<option value="Madre" <?php if($row['tipo_representante']=='Madre') {echo "selected='selected'";}?>>Madre</option>
										<option value="Abuelos" <?php if($row['tipo_representante']=='Abuelos') {echo "selected='selected'";}?>>Abuelos</option>
										<option value="Hermanos" <?php if($row['tipo_representante']=='Hermanos') {echo "selected='selected'";}?>>Hermanos</option>
										<option value="Tios" <?php if($row['tipo_representante']=='Tios') {echo "selected='selected'";}?>>Tios</option>
										</select>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombre y Apellido del Representante</label>
								<input type="text" class="form-control" name="nombre_representante" id="exampleInputPassword1" placeholder="Nombre" value="<?php echo $row['nombre_representante'] ?>">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula (C.I)</label>
								<input type="text" class="form-control" name="cedula_representante" id="exampleInputPassword1" placeholder="Cedula" value="<?php echo $row['ci_representante'] ?>">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nacionalidad</label>
								<select name="nacionalidad_representante" id="" class="form-control">
									<option value="Venezolana" <?php if($row['nacionalidad_representante']=='Venezolana') {echo "selected='selected'";}?>>Venezolana</option>
									<option value="Extranjera" <?php if($row['nacionalidad_representante']=='Extranjera') {echo "selected='selected'";}?>>Extranjera</option>
								</select>
							</div>
									</div>
								</div>
								<div class="row">
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Fecha nacimiento Representante (*)</label>
										<input type="date" class="form-control" id="fecha_nac_representante" name="fecha_nac_representante" placeholder="Fecha" value="<?php echo $row['fecha_nac_representante'] ?>" onblur="calcAge(this.value)">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 1</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn1_representante" placeholder="Telefono" value="<?php echo $row['tlfn1_representante'] ?>">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 1</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn2_representante" placeholder="Telefono" value="<?php echo $row['tlfn2_representante'] ?>">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label>Edad Representante</label>
										<input type="text" class="form-control" name="edad_representante" id="exampleInputPassword1" placeholder="Edad" value="<?php echo $row['edad_representante'] ?>">
										</div>
										</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Ocupacion Representante</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="ocupacion_representante" value="<?php echo $row['ocupacion_representante'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Lugar de trabajo</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="lugar_trabajo_representante" value="<?php echo $row['lugar_trabajo_representante'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono del lugar</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn_lugar_trabajo_representante" placeholder="Telefono" value="<?php echo $row['tlfn_lugar_trabajo_representante'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<label>¿Vive con el alumno?</label>
										<br>
										<input type="radio" name="vive_con_alumno" id="optionsRadios1" value="Si" <?php if($row['vive_con_alumno']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="vive_con_alumno" id="optionsRadios1" value="No" <?php if($row['vive_con_alumno']=='No') {echo "checked='checked'";}?>>No
										<br>
										<label>En caso de negarlo, explique</label>
										<input type="text" class="form-control" name="observacion_vive_con_alumno" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_vive_con_alumno'] ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="exampleInputPassword1">Sueldo mensual</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="sueldo_representante" value="<?php echo $row['sueldo_representante'] ?>">
										</div>
									</div>
								</div>
								<hr class="divisor">
							<button type="submit" class="btn btn-warning"><span class="icon-scissors"></span> Editar</button>
							<a class="btn btn-info pull-right" href="editar_alumno.php?alumno=<?php echo $row['id_alumno']?>" role="button"><span class="icon-undo2"></span>  Regresar</a>
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