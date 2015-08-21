<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "menu.php"
?>

			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Alumno?')){
       			document.form.submit()
    			}
			}
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Alumno
					</h1>
					<small><i>Registrar Alumnos en el sistema, para luego inscribir y generar boletín.</i></small>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: {PHP ID_ALUMNO}</h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_alumno.php">
								<h4>A.-DATOS PERSONALES DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombres</label>
								<input type="text" class="form-control" name="nombres_alumno" id="exampleInputPassword1" placeholder="Nombres">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Apellidos</label>
								<input type="text" class="form-control" name="apellidos_alumno" id="exampleInputPassword1" placeholder="Apellidos">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula</label>
								<input type="text" class="form-control" name="cedula_alumno" id="exampleInputPassword1" placeholder="Cedula">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Edad</label>
								<input type="text" class="form-control" name="edad_alumno" id="exampleInputPassword1" placeholder="Edad">
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Sexo</label>
							<select class="form-control" name="sexo_alumno" id="#">
								<option value="M">Masculino</option>
								<option value="F">Femenino</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Lugar de Nacimiento</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="lugar_nac_alumno" placeholder="Lugar de Nacimiento">
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Fecha nacimiento alumno</label>
							<input type="date" class="form-control" id="exampleInputPassword1" name="fecha_nac_alumno" placeholder="Fecha">
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Dirección</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="direccion_alumno" placeholder="Dirección del Alumno">
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 1</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf1_alumno" placeholder="Telefono">
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 2</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" placeholder="Telefono">
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 3</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf3_alumno" placeholder="Telefono">
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
												<label>Ultimo grado cursado</label>
												<input type="text" class="form-control" name="ultimo_grado">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Estatus</label>
												<br>
												<input type="radio" name="status_ult_plantel" id="optionsRadios1" value="Si">Aprobado
												<br>
												<input type="radio" name="status_ult_plantel" id="optionsRadios1" value="No">Aplazado
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
											<label for="">Personas que viven con el alumno</label>
											<input type="number" class="form-control" name="personas_vivienda">
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
										<input type="number" name="ingreso_vivienda" class="form-control" placeholder="20.000,00">
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanas (Hembra)</label>
										<input type="number" name="cantidad_hermanas" class="form-control">
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanos (Varon)</label>
										<input type="number" name="cantidad_hermanos" class="form-control">
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
							<div class="section">
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
										<input type="text" class="form-control" name="observacion_impedimento" placeholder="Esto puede ir vacio">
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