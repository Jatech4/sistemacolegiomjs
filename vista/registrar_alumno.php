<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_grados = mysql_query("SELECT * FROM grados");
?>

			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Alumno?'))
    				{
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

			    if(year_diff < 4){
			    alert('Seleccionar un año menor al Actual')
			    document.getElementById('edad_alumno').value =  '';
			    document.getElementById('fecha_nac_alumno').value =  '';
			    exit;
			    }

			    if(year_diff > 12){
			    alert('Seleccionar un año mayor al Actual')
			    document.getElementById('edad_alumno').value =  '';
			    document.getElementById('fecha_nac_alumno').value =  '';
			    exit;
			    }

			    document.getElementById('edad_alumno').value =  year_diff;
			    return year_diff;

			}
			</script>
			<script type="text/javascript">
			function minmax(value, min, max)
			{
			if(parseInt(value) < min || isNaN(value))
			return 1;
			else if(parseInt(value) > max)
			return 30000000;
			else return value;
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Alumno
					</h1>
					<br>
					<small><i>(*) Campos Obligatorios</i></small>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_alumno.php" onsubmit="enviar()">
								<h4>A.-DATOS PERSONALES DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombres (*)</label>
								<input type="text" class="form-control" name="nombres_alumno"
								onkeypress="return soloLetras(event)" maxlength="20"
								id="exampleInputPassword1"
								placeholder="Nombres" required>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Apellidos (*)</label>
								<input type="text" class="form-control" onkeypress="return soloLetras
								(event)" maxlength="20" name="apellidos_alumno"
								id="exampleInputPassword1" placeholder="Apellidos" required>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula (*)</label>
								<select class="form-control" name="nacionalidad">
							<option value="V">V</option>
							<option value="E">E</option>
							<option value="R">R</option>
							</select>
								<input type="text" class="form-control" name="cedula_alumno"
								onkeypress="return solonumeros2(event)" id="txtWeight" maxlength="8" placeholder="Cedula" onkeyup="this.value = minmax(this.value, 1, 30000000)" required>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Edad (*)</label>
								<input type="number" onkeypress="return solonumeros(event)"
								maxlength="2" class="form-control" name="edad_alumno"
								id="edad_alumno" placeholder="Edad" required disabled="disabled">
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Sexo (*)</label>
							<select class="form-control" name="sexo_alumno" id="#">
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Lugar de Nacimiento (*)</label>
							<!-- <input type="text" class="form-control" onkeypress="return soloLetras
							(event)" maxlength="20" id="exampleInputPassword1"
							name="lugar_nac_alumno"
								placeholder="Lugar de Nacimiento" required> -->
							<select class="form-control" name="#">
							<option value="Anzoategui">Anzoategui</option>
							<option value="Aragua">Aragua</option>
							<option value="Amazona">Amazona</option>
							<option value="Apure">Apure</option>
							<option value="Bolivar">Bolivar</option>
							<option value="Barinas">Barinas</option>
							<option value="Cojedes">Cojedes</option>
							<option value="Carabobo">Carabobo</option>
							<option value="Distrito Capital">Distrito Capital</option>
							<option value="Delta Amacuro">Delta Amacuro</option>
							<option value="Miranda">Miranda</option>
							<option value="Merida">Merida</option>
							<option value="Monagas">Monagas</option>
							<option value="Nueva Esparta">Nueva Esparta</option>
							<option value="Portuguesa">Portuguesa</option>
							<option value="Guarico">Guarico</option>
							<option value="Falcon">Falcon</option>
							<option value="Lara">Lara</option>
							<option value="Tachira">Tachira</option>
							<option value="Trujillo">Trujillo</option>
							<option value="Sucre">Sucre</option>
							<option value="Vargas">Vargas</option>
							<option value="Yaracuy">Yaracuy</option>
							<option value="Zulia">Zulia</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Fecha nacimiento alumno (*)</label>
							<input type="date" class="form-control" id="fecha_nac_alumno" name="fecha_nac_alumno" placeholder="Fecha" required onblur="calcAge(this.value)">
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Dirección (*)</label>
							<input type="text" class="form-control" maxlength="50"
							id="exampleInputPassword1" name="direccion_alumno" placeholder="Dirección del Alumno" required>
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 1 (*)</label>
							<input type="text" onkeypress="return solonumeros(event)"
								maxlength="11" class="form-control" id="exampleInputPassword1"
								name="tlf1_alumno" placeholder="Telefono" required>
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 2</label>
							<input type="text" onkeypress="return solonumeros(event)"
								maxlength="11" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" placeholder="Telefono">
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 3</label>
							<input type="text" onkeypress="return solonumeros(event)"
								maxlength="11" class="form-control" id="exampleInputPassword1" name="tlf3_alumno" placeholder="Telefono">
							</div>
									</div>
								</div>
								<hr class="divisor">
								<div class="section">
									<h4>B.-DATOS DE PROCEDENCIA</h4>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Plantel Procedencia</label>
												<input type="text" class="form-control" name="plantel_procedencia" placeholder="U.E.D. Nombre Plantel">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="exampleInputPassword1">Grado: (*)</label>
												<select class="form-control" name="grado" id="grado" required>
													<option value="" selected disabled>Seleccione</option>
													<option value="0">Preescolar</option>
													<?php while ($row_grados = mysql_fetch_array($result_grados)){?>
													<option value="<?php echo $row_grados['id_grado']?>"><?php echo $row_grados['grado']?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Estatus</label>
												<br>
												<input type="radio" name="status_ult_plantel" id="optionsRadios1" value="Si" >Aprobado
												<br>
												<input type="radio" name="status_ult_plantel" id="optionsRadios1" value="No" >Aplazado
												<br>
											</div>
										</div>
									</div>
								</div>
								<hr class="divisor">
								<div class="section">
									<h4>C.-DOCUMENTOS PRESENTADOS</h4>
									<div class="row">
										<div class="col-md-3">
										<label>Carta buena conducta</label>
										<br>
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="No">No
										</div>
										<div class="col-md-3">
										<label>Boleta/Promocion</label>
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="No">No
										</div>
										<div class="col-md-3">
										<label>3 Fotos/Alumno</label>
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="No">No
										</div>
										<div class="col-md-3">
										<label>2 Fotos/Representante</label>
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="No">No
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
										<label>C.I Representante</label>
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="No">No
										</div>
										<div class="col-md-3">
										<label>Copia Partida de Nacimiento</label>
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="No">No
										</div>
									</div>
								</div>
							<hr class="divisor">
							<div class="section">
								<h4>D.-SITUACIÓN ECONOMICA DEL NÚCLEO FAMILIAR DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="#">Tipo Vivienda</label>
											<select name="tipo_vivienda" class="form-control">
												<option value="Habitacion">Habitación</option>
												<option value="Casa">Casa</option>
												<option value="Apartamento">Apartamento</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Condición de la Vivienda</label>
											<select name="condicion_vivienda" class="form-control">
												<option value="Alquilada">Alquilada</option>
												<option value="Propia">Propia</option>
												<option value="Prestada">Prestada</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">N&uacute;mero de personas que viven con el alumno</label>
											<input type="text" class="form-control" onkeypress="return solonumeros(event)"
								maxlength="1" name="personas_vivienda" onkeyup="this.value = hermana(this.value, 1, 10)" required>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Con quien vive el alumno</label>
											<select name="abuelos_vivienda" id="" class="form-control">
												<option value="Padres">Padres</option>
												<option value="Abuelos">Abuelos</option>
												<option value="Tios">Tíos</option>
												<option value="Primos">Sobrinos</option>
												<option value="Hermanos">Hermanos</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label for="">Cantidad de ingreso en la vivienda</label>
										<input type="number" onkeypress="return solonumeros2(event)"
								maxlength="11" name="ingreso_vivienda" class="form-control" placeholder="20.000,00" required>
									</div>
									<div class="col-md-3">
										<label for="">N&uacute;mero de Hermanas</label>
										<input type="text" onkeypress="return solonumeros(event)"
								 name="cantidad_hermanas" class="form-control" onkeyup="this.value = hermana2(this.value, 0, 10)" required>
										<script type="text/javascript">

										function hermana(value, min, max)
										{
										if(parseInt(value) < min || isNaN(value))
											return 1;
										else if(parseInt(value) > max)
											return 10;
										else return value;
										}

										function hermana2(value, min, max)
										{
										if(parseInt(value) < min || isNaN(value))
											return 0;
										else if(parseInt(value) > max)
											return 10;
										else return value;
										}
										</script>
									</div>
									<div class="col-md-3">
										<label for="">N&uacute;mero de Hermanos (Varon)</label>
										<input type="text" onkeypress="return solonumeros(event)"
								maxlength="1" name="cantidad_hermanos" class="form-control" onkeyup="this.value = hermana(this.value, 0, 10)" required>
									</div>
									<div class="col-md-3">
										<label for="">Lugar que ocupa entre ellos</label>
										<select name="lugar_ocu_alumno" id="" class="form-control">
											<option value="Primero">Primero</option>
											<option value="Segundo">Segundo</option>
											<option value="Tercero">Tercero</option>
											<option value="Cuarto">Cuarto</option>
											<option value="Quinto">Quinto</option>
										</select>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="">¿Estudian en el plantel?</label>
										<select name="estudian_hermanos" id="" class="form-control">
											<option value="Si">Si</option>
											<option value="No">No</option>
										</select>
									</div>
								</div>
							</div>
							<hr class="divisor">
								<div class="row">
									<div class="col-md-12">
										<h4>E. Posee registro médico?</h4>
									</div>
								</div>
								<select name="rec_medico" id="rec_medico" class="form-control">
									<option disabled selected>Seleccione</option>
									<option value="Si">Tiene Registro Medico</option>
									<option value="No">No tiene Registro Medico</option>
								</select>
							<div id="medic" style="display: none;">
								<div class="section"> <!-- situacion medica -->
								<h4>E.-ASPECTOS DE SALUD DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
										<label for="">Vacunas que posee</label>
										<div class="checkbox" style="margin-left: 9%;">
										<input type="checkbox" name="vacuna_triple" value="Si">Triple
										<br>
										<input type="checkbox" name="vacuna_bcg" value="Si">Bcg
										<br>
										<input type="checkbox" name="vacuna_polio" value="Si">Polio
										<br>
										<input type="checkbox" name="vacuna_hepab" value="Si">Hepatitis B
										<br>
										<input type="checkbox" name="vacuna_meningitis" value="Si">Meningitis
										</div>
									</div>
									<div class="col-md-3">
										<label>¿Es asmatico?</label>
										<br>
										<input type="radio" name="asmatico" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="asmatico" id="optionsRadios1" value="No">No
									</div>
									<div class="col-md-3">
										<label>¿Es Diabetico?</label>
										<br>
										<input type="radio" name="diabetico" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="diabetico" id="optionsRadios1" value="No">No
									</div>
									<div class="col-md-3">
										<label>¿Es Alergico?</label>
										<br>
										<input type="radio" name="alergico" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="alergico" id="optionsRadios1" value="No">No
										<br>
										<label>¿A que?</label>
										<input type="text" class="form-control" name="observacion_alergia" placeholder="Esto puede ir vacio">
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label>¿Tiene control medico periódico?</label>
										<br>
										<input type="radio" name="control_medico" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="control_medico" id="optionsRadios1" value="No">No
										<br>
										<label>¿Donde?</label>
										<input type="text" class="form-control" name="observacion_control" placeholder="Esto puede ir vacio">
									</div>
									<div class="col-md-3">
										<label>Medicamento que le suministra en caso de fiebre</label>
										<input type="text" name="suministro_fiebre" class="form-control">
									</div>
									<div class="col-md-3">
										<label for="">Posee alguna dificultad</label>
										<select name="tipo_dificultad" id="" class="form-control">
											<option value="0">...</option>
											<option value="Auditiva">Auditiva</option>
											<option value="Lenguaje">Lenguaje</option>
											<option value="Motora">Motora</option>
										</select>
									</div>
									<div class="col-md-3">
										<label for="">¿Ha sido intervenido quirúrgicamente?</label>
										<br>
										<input type="radio" name="operacion" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="operacion" id="optionsRadios1" value="No">No
										<br>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="">¿Alguna vez ha sido referido al psicólogo?</label>
										<br>
										<input type="radio" name="psicologo" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="psicologo" id="optionsRadios1" value="No">No
										<br>
									</div>
									<div class="col-md-3">
										<label>¿Alguna vez a sido referido al psicópedagogo?</label>
										<br>
										<input type="radio" name="psicopedagogo" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="psicopedagogo" id="optionsRadios1" value="No">No
										<br>
										<label>Razones - Referencias</label>
										<input type="text" class="form-control" name="observaciones_psicopedagogo" placeholder="Esto puede ir vacio">
									</div>
									<div class="col-md-3">
										<label for="">¿Tiene impedimento para realizar Educ. Fisica y Deportes?</label>
										<br>
										<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="Si">Si
										<br>
										<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="No">No
										<br>
										<label>Razones</label>
										<input type="text" onkeypress="return soloLetras(event)"
								maxlength="1" class="form-control" name="observacion_impedimento" placeholder="Esto puede ir vacio">
									</div>
								</div>
							</div> <!-- ./situacionmedica -->
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
				Sistema de Inscripci&oacute;n Martin J Sanabria
			</footer>
			<div class='control-sidebar-bg'></div>
		</div>
		<script src="js/jQuery/jQuery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/app.min.js" type="text/javascript"></script>
		<script src="js/custom2.js" type="text/javascript"></script>
	</body>
</html>
