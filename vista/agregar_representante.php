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
    			if (confirm('¿Registrar Representante?')){
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
					Agregar representante al Alumno: <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: <?php echo $row['id_alumno'];?></h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_representante.php" onsubmit="enviar()">
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
								<input type="text" class="form-control" name="nombre_representante" onkeypress="return soloLetras(event)" maxlength="15" id="exampleInputPassword1" placeholder="Nombre" required>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula (C.I)</label>
								<input type="text" class="form-control" name="cedula_representante" onkeypress="return solonumeros2(event)" onkeyup="this.value = minmax(this.value, 1, 30000000)" maxlength="12" id="exampleInputPassword1" placeholder="Cedula" required>
							</div>
							<script type="text/javascript">
							function minmax(value, min, max) 
							{
							if(parseInt(value) < min || isNaN(value)) 
							return 1; 
							else if(parseInt(value) > max) 
							return 30000000; 
							else return value;
							}

							function edad(value, min, max) 
							{
							if(parseInt(value) < min || isNaN(value)) 
							return 1; 
							else if(parseInt(value) > max) 
							return 99; 
							else return value;
							}
							</script>
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
										<label for="exampleInputPassword1">Fecha nacimiento Representante (*)</label>
										<input type="date" class="form-control" id="fecha_nac_representante" name="fecha_nac_representante" placeholder="Fecha" required onblur="calcAge(this.value)">
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 1</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn1_representante" onkeypress="return solonumeros2(event)" maxlength="12" placeholder="Telefono" required>
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono 2</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn2_representante" onkeypress="return solonumeros2(event)" maxlength="12" placeholder="Telefono" required>
										</div>
										</div>
										<div class="col-md-3">
										<div class="form-group">
										<label>Edad Representante</label>
										<input type="text" class="form-control" name="edad_representante" onkeypress="return solonumeros(event)" maxlength="3" id="edad_representante" placeholder="Edad" onkeyup="this.value = edad(this.value, 1, 99)"  requiered>
										
										</div>
										</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Ocupacion Representante</label>
										<input type="text" class="form-control" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="20" name="ocupacion_representante"  required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Lugar de trabajo</label>
										<input type="text" class="form-control" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="20" name="lugar_trabajo_representante" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
										<label for="exampleInputPassword1">Telefono del lugar</label>
										<input type="text" class="form-control" id="exampleInputPassword1" name="tlfn_lugar_trabajo_representante" onkeypress="return solonumeros2(event)" maxlength="12" placeholder="Telefono" required>
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
										<input type="text" class="form-control" id="exampleInputPassword1" name="sueldo_representante" onkeypress="return solonumeros2(event)" maxlength="12" required>
										</div>
									</div>
								</div>
								<hr class="divisor">
							<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Registrar</button>
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