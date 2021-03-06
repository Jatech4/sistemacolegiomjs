<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM alumnos a, procedencia_alumno b, documentos_presentados c, situacion_economica d, salud_alumno e WHERE a.id_alumno=b.id_alumno AND a.id_alumno=c.id_alumno AND a.id_alumno=d.id_alumno AND a.id_alumno=e.id_alumno AND a.id_alumno=".$_GET['alumno']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
include_once "menu.php"
?>
			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Ver registro del Alumno:  <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: <?php echo $row['id_alumno'];?></h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/editar_alumno.php">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['alumno'] ?>">
								<h4>A.-DATOS PERSONALES DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombres</label>
								<input type="text" class="form-control" name="nombres_alumno" id="exampleInputPassword1" placeholder="Nombres" value="<?php echo $row['nombres_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Apellidos</label>
								<input type="text" class="form-control" name="apellidos_alumno" id="exampleInputPassword1" placeholder="Apellidos" value="<?php echo $row['apellidos_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula</label>
								<input type="text" class="form-control" name="cedula_alumno" id="exampleInputPassword1" placeholder="Cedula" value="<?php echo $row['cedula_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Edad</label>
								<input type="text" class="form-control" name="edad_alumno" id="exampleInputPassword1" placeholder="Edad" value="<?php echo $row['edad_alumno'] ?>" disabled>
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Sexo</label>
							<select class="form-control" name="sexo_alumno" id="#" disabled>
								<option value="M" <?php if($row['sexo_alumno']=='M') {echo "selected='selected'";}?>>Masculino</option>
								<option value="F" <?php if($row['sexo_alumno']=='F') {echo "selected='selected'";}?>>Femenino</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Lugar de Nacimiento</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="lugar_nac_alumno" placeholder="Lugar de Nacimiento" value="<?php echo $row['lugar_nac_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Fecha nacimiento alumno</label>
							<input type="date" class="form-control" id="exampleInputPassword1" name="fecha_nac_alumno" placeholder="Fecha" value="<?php echo $row['fecha_nac_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Dirección</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="direccion_alumno" placeholder="Dirección del Alumno" value="<?php echo $row['direccion_alumno'] ?>" disabled>
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 1</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf1_alumno" placeholder="Telefono" value="<?php echo $row['tlf1_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 2</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" placeholder="Telefono" value="<?php echo $row['tlf2_alumno'] ?>" disabled>
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 3</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf3_alumno" placeholder="Telefono" value="<?php echo $row['tlf3_alumno'] ?>" disabled>
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
												<input type="text" class="form-control" name="plantel_procedencia" placeholder="U.E.D. Nombre Plantel" value="<?php echo $row['plantel_procedencia'] ?>" disabled>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Ultimo grado cursado</label>
												<input type="text" class="form-control" name="ultimo_grado" value="<?php echo $row['ultimo_grado'] ?>" disabled>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Estatus</label>
												<br>
												<input type="radio" name="aprobado" id="optionsRadios1" value="Si" <?php if($row['aprobado']=='Si') {echo "checked='checked'";}?> disabled>Aprobado
												<br>
												<input type="radio" name="aprobado" id="optionsRadios1" value="No" <?php if($row['aprobado']=='No') {echo "checked='checked'";}?> disabled>Aplazado
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
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="Si" <?php if($row['carta_conducta']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="No" <?php if($row['carta_conducta']=='No') {echo "checked='checked'";}?> disabled>No
										</div>
										<div class="col-md-3">
										<label>Boleta/Promocion</label>
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="Si" <?php if($row['boleta_promocion']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="No" <?php if($row['boleta_promocion']=='No') {echo "checked='checked'";}?> disabled>No
										</div>
										<div class="col-md-3">
										<label>3 Fotos/Alumno</label>
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="Si" <?php if($row['fotos_alumno']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="No" <?php if($row['fotos_alumno']=='No') {echo "checked='checked'";}?> disabled>No
										</div>
										<div class="col-md-3">
										<label>2 Fotos/Representante</label>
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="Si" <?php if($row['fotos_representante']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="No" <?php if($row['fotos_representante']=='No') {echo "checked='checked'";}?> disabled>No
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
										<label>C.I Representante</label>
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="Si" <?php if($row['ci_representante']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="No" <?php if($row['ci_representante']=='No') {echo "checked='checked'";}?> disabled>No
										</div>

									<div class="col-md-3">
										<label>Copia Partida de Nacimiento</label>
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="Si" <?php if($row['partida_nacimiento']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="No" <?php if($row['partida_nacimiento']=='No') {echo "checked='checked'";}?> disabled>No
								    </div>
								</div>
								<hr class="divisor">
								<div class="section">
									<h4>D.-REPRESENTANTES</h4>
									<div class="row">
										<div class="col-md-12">
											<table class="table">
									<caption>Lista de Representantes del alumno <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?></caption>
									<?php
									$result2 = mysql_query("SELECT id_representante, tipo_representante, nombre_representante, ci_representante FROM representantes WHERE id_alumno=".$row['id_alumno']."");
									?>
									<thead>
									<tr>
									<th>ID</th>
									<th>Tipo</th>
									<th>Nombres</th>
									<th>Cedula</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row2 = mysql_fetch_array($result2)){?>
									<tr>
									<td><?php echo $row2['id_representante'] ?></td>
									<td><?php echo $row2['tipo_representante'] ?></td>
									<td><?php echo $row2['nombre_representante'] ?></td>
									<td><?php echo $row2['ci_representante'] ?></td>
									</tr>
									<?php }?>
									</tbody>
									</table>
										</div>
									</div>
								</div>
							<hr class="divisor">
							<div class="section">
								<h4>E.-SITUACIÓN ECONOMICA DEL NÚCLEO FAMILIAR DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="#">Tipo Vivienda</label>
											<select name="tipo_vivienda" class="form-control" disabled>
												<option value="Habitacion" <?php if($row['tipo_vivienda']=='Habitacion') {echo "selected='selected'";}?>>Habitación</option>
												<option value="Casa" <?php if($row['tipo_vivienda']=='Casa') {echo "selected='selected'";}?>>Casa</option>
												<option value="Apartamento" <?php if($row['tipo_vivienda']=='Apartamento') {echo "selected='selected'";}?>>Apartamento</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Condición de la Vivienda</label>
											<select name="condicion_vivienda" class="form-control" disabled>
												<option value="Alquilada" <?php if($row['condicion_vivienda']=='Alquilada') {echo "selected='selected'";}?>>Alquilada</option>
												<option value="Propia" <?php if($row['condicion_vivienda']=='Propia') {echo "selected='selected'";}?>>Propia</option>
												<option value="Prestada" <?php if($row['condicion_vivienda']=='Prestada') {echo "selected='selected'";}?>>Prestada</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Personas que viven con el alumno</label>
											<input type="number" class="form-control" name="personas_vivienda" value="<?php echo $row['personas_vivienda'] ?>" disabled>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Con quien vive el alumno</label>
											<select name="abuelos_vivienda" id="" class="form-control" disabled>
												<option value="Padres" <?php if($row['abuelos_vivienda']=='Padres') {echo "selected='selected'";}?>>Padres</option>
												<option value="Abuelos" <?php if($row['abuelos_vivienda']=='Abuelos') {echo "selected='selected'";}?>>Abuelos</option>
												<option value="Tios" <?php if($row['abuelos_vivienda']=='Tios') {echo "selected='selected'";}?>>Tíos</option>
												<option value="Primos" <?php if($row['abuelos_vivienda']=='Primos') {echo "selected='selected'";}?>>Sobrinos</option>
												<option value="Hermanos" <?php if($row['abuelos_vivienda']=='Hermanos') {echo "selected='selected'";}?>>Hermanos</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label for="">Cantidad de ingreso en la vivienda</label>
										<input type="number" name="ingreso_vivienda" class="form-control" placeholder="20.000,00" value="<?php echo $row['ingreso_vivienda'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanas (Hembra)</label>
										<input type="number" name="cantidad_hermanas" class="form-control" value="<?php echo $row['cantidad_hermanas'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanos (Varon)</label>
										<input type="number" name="cantidad_hermanos" class="form-control" value="<?php echo $row['cantidad_hermanos'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="">Lugar que ocupa entre ellos</label>
										<select name="lugar_ocu_alumno" id="" class="form-control" disabled>
											<option value="Primero" <?php if($row['lugar_ocu_alumno']=='Primero') {echo "selected='selected'";}?>>Primero</option>
											<option value="Segundo" <?php if($row['lugar_ocu_alumno']=='Segundo') {echo "selected='selected'";}?>>Segundo</option>
											<option value="Tercero" <?php if($row['lugar_ocu_alumno']=='Tercero') {echo "selected='selected'";}?>>Tercero</option>
											<option value="Cuarto" <?php if($row['lugar_ocu_alumno']=='Cuarto') {echo "selected='selected'";}?>>Cuarto</option>
											<option value="Quinto" <?php if($row['lugar_ocu_alumno']=='Quinto') {echo "selected='selected'";}?>>Quinto</option>
										</select>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="">¿Estudian en el plantel?</label>
										<select name="estudian_hermanos" id="" class="form-control" disabled>
											<option value="Si" <?php if($row['estudian_hermanos']=='Si') {echo "selected='selected'";}?>>Si</option>
											<option value="No" <?php if($row['estudian_hermanos']=='No') {echo "selected='selected'";}?>>No</option>
										</select>
									</div>
								</div>
							</div>
							<hr class="divisor">
							<div class="section">
								<h4>F.-ASPECTOS DE SALUD DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
										<label for="">Vacunas que posee</label>
										<div class="checkbox" style="margin-left: 9%;">
										<input type="checkbox" name="vacuna_triple" value="Tr" <?php if($row['vacuna_triple']=='Tr') {echo "checked='checked'";}?> disabled>Triple
										<br>
										<input type="checkbox" name="vacuna_bcg" value="Bc" <?php if($row['vacuna_bcg']=='Bc') {echo "checked='checked'";}?> disabled>Bcg
										<br>
										<input type="checkbox" name="vacuna_polio" value="Po" <?php if($row['vacuna_polio']=='Po') {echo "checked='checked'";}?> disabled>Polio
										<br>
										<input type="checkbox" name="vacuna_hepab" value="He" <?php if($row['vacuna_hepab']=='He') {echo "checked='checked'";}?> disabled>Hepatitis B
										<br>
										<input type="checkbox" name="vacuna_meningitis" value="Me" <?php if($row['vacuna_meningitis']=='Me') {echo "checked='checked'";}?> disabled>Meningitis
										</div>
									</div>
									<div class="col-md-3">
										<label>¿Es asmatico?</label>
										<br>
										<input type="radio" name="asmatico" id="optionsRadios1" value="Si" <?php if($row['asmatico']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="asmatico" id="optionsRadios1" value="No" <?php if($row['asmatico']=='No') {echo "checked='checked'";}?> disabled>No
									</div>
									<div class="col-md-3">
										<label>¿Es Diabetico?</label>
										<br>
										<input type="radio" name="diabetico" id="optionsRadios1" value="Si" <?php if($row['diabetico']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="diabetico" id="optionsRadios1" value="No" <?php if($row['diabetico']=='No') {echo "checked='checked'";}?> disabled>No
									</div>
									<div class="col-md-3">
										<label>¿Es Alergico?</label>
										<br>
										<input type="radio" name="alergico" id="optionsRadios1" value="Si" <?php if($row['alergico']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="alergico" id="optionsRadios1" value="No" <?php if($row['alergico']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
										<label>¿A que?</label>
										<input type="text" class="form-control" name="observacion_alergia" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_alergia'] ?>" disabled>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label>¿Tiene control medico periódico?</label>
										<br>
										<input type="radio" name="control_medico" id="optionsRadios1" value="Si" <?php if($row['control_medico']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="control_medico" id="optionsRadios1" value="No" <?php if($row['control_medico']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
										<label>¿Donde?</label>
										<input type="text" class="form-control" name="observacion_control" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_control'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label>Medicamento que le suministra en caso de fiebre</label>
										<input type="text" name="suministro_fiebre" class="form-control" value="<?php echo $row['suministro_fiebre'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="">Posee alguna dificultad</label>
										<select name="tipo_dificultad" id="" class="form-control" disabled>
											<option value="Auditiva" <?php if($row['tipo_dificultad']=='Auditiva') {echo "selected='selected'";}?>>Auditiva</option>
											<option value="Lenguaje" <?php if($row['tipo_dificultad']=='Lenguaje') {echo "selected='selected'";}?>>Lenguaje</option>
											<option value="Motora" <?php if($row['tipo_dificultad']=='Motora') {echo "selected='selected'";}?>>Motora</option>
										</select>
									</div>
									<div class="col-md-3">
										<label for="">¿Ha sido intervenido quirúrgicamente?</label>
										<br>
										<input type="radio" name="operacion" id="optionsRadios1" value="Si" <?php if($row['operacion']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="operacion" id="optionsRadios1" value="No" <?php if($row['operacion']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3">
										<label for="">¿Alguna vez ha sido referido al psicólogo?</label>
										<br>
										<input type="radio" name="psicologo" id="optionsRadios1" value="Si" <?php if($row['psicologo']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="psicologo" id="optionsRadios1" value="No" <?php if($row['psicologo']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
									</div>
									<div class="col-md-3">
										<label>¿Alguna vez a sido referido al psicópedagogo?</label>
										<br>
										<input type="radio" name="psicopedagogo" id="optionsRadios1" value="Si" <?php if($row['psicopedagogo']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="psicopedagogo" id="optionsRadios1" value="No" <?php if($row['psicopedagogo']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
										<label>Razones - Referencias</label>
										<input type="text" class="form-control" name="observaciones_psicopedagogo" placeholder="Esto puede ir vacio" value="<?php echo $row['observaciones_psicopedagogo'] ?>" disabled>
									</div>
									<div class="col-md-3">
										<label for="">¿Tiene impedimento para realizar Educ. Fisica y Deportes?</label>
										<br>
										<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="Si" <?php if($row['impedimento_fisico']=='Si') {echo "checked='checked'";}?> disabled>Si
										<br>
										<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="No" <?php if($row['impedimento_fisico']=='No') {echo "checked='checked'";}?> disabled>No
										<br>
										<label>Razones</label>
										<input type="text" class="form-control" name="observacion_impedimento" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_impedimento'] ?>" disabled>
									</div>
								</div>
							</div>
							<hr class="divisor">
							<a class="btn btn-info" href="agregar_alumno.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
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
		<script src="js/demo.js" type="text/javascript"></script>
	</body>
</html>