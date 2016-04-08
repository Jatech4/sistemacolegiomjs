<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM alumnos a, procedencia_alumno b, documentos_presentados c, situacion_economica d, salud_alumno e WHERE a.id_alumno=b.id_alumno AND a.id_alumno=c.id_alumno AND a.id_alumno=d.id_alumno AND a.id_alumno=e.id_alumno AND a.id_alumno=".$_GET['alumno']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
include_once "menu.php"
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
			<script type="text/javascript">
			function minmax(value, min, max)
			{
			if(parseInt(value) < min || isNaN(value))
			return 1;
			else if(parseInt(value) > max)
			return 30000000;
			else return value;
			}

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
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Editar registro del Alumno:  <?php echo $row['nombres_alumno']." ".$row['apellidos_alumno'];?>
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<h5>NUMERO DE SOCIO: <?php echo $row['id_alumno'];?></h5>
							<form class="formulario" name="form" id="form" method="POST" action="../controlador/editar_alumno.php" onsubmit="enviar()">
							<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['alumno'] ?>">
								<h4>A.-DATOS PERSONALES DEL ALUMNO</h4>
								<div class="row">
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombres</label>
								<input type="text" class="form-control" name="nombres_alumno" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="15" placeholder="Nombres" value="<?php echo $row['nombres_alumno'] ?>">
							</div>
									</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Apellidos</label>
								<input type="text" class="form-control" name="apellidos_alumno" id="exampleInputPassword1" onkeypress="return soloLetras(event)" maxlength="15" placeholder="Apellidos" value="<?php echo $row['apellidos_alumno'] ?>">
							</div>
									</div>
									<div class="col-md-1">
							<div class="form-group">
								<label for="exampleInputPassword1">Cedula</label>
								<select class="form-control" name="nacionalidad">
							<option value="V" <?php if($row['nacionalidad']=='V') {echo "selected='selected'";}?>>V</option>
							<option value="E" <?php if($row['nacionalidad']=='E') {echo "selected='selected'";}?>>E</option>
							<option value="R" <?php if($row['nacionalidad']=='R') {echo "selected='selected'";}?>>R</option>
							</select>
							</div>
							</div>
							<div class="col-md-2">
							<div class="form-group">
								<input type="text" class="form-control" name="cedula_alumno" onkeyup="this.value = minmax(this.value, 1, 30000000)" id="exampleInputPassword1" onkeypress="return solonumeros2(event)" maxlength="12" placeholder="Cedula" value="<?php echo $row['cedula_alumno'] ?>" style="margin-top: 26;">
							</div>
							</div>
									<div class="col-md-3">
							<div class="form-group">
								<label for="exampleInputPassword1">Edad</label>
								<input type="number" class="form-control" onkeypress="return solonumeros(event)" maxlength="1" name="edad_alumno" id="edad_alumno" placeholder="Edad" value="<?php echo $row['edad_alumno'] ?>" readonly="readonly">
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Sexo</label>
							<select class="form-control" name="sexo_alumno" id="#">
								<option value="M" <?php if($row['sexo_alumno']=='M') {echo "selected='selected'";}?>>Masculino</option>
								<option value="F" <?php if($row['sexo_alumno']=='F') {echo "selected='selected'";}?>>Femenino</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Lugar de Nacimiento</label>
							<!-- <input type="text" class="form-control" onkeypress="return soloLetras(event)" maxlength="25" id="exampleInputPassword1" name="lugar_nac_alumno" placeholder="Lugar de Nacimiento" value="<?php echo $row['lugar_nac_alumno'] ?>"> -->
							<select class="form-control" name="lugar_nac_alumno">
							<option value="Anzoategui" <?php if($row['lugar_nac_alumno']=='Anzoategui') {echo "selected='selected'";}?>>Anzoategui</option>
							<option value="Aragua" <?php if($row['lugar_nac_alumno']=='Aragua') {echo "selected='selected'";}?>>Aragua</option>
							<option value="Amazonas" <?php if($row['lugar_nac_alumno']=='Amazonas') {echo "selected='selected'";}?>>Amazonas</option>
							<option value="Apure" <?php if($row['lugar_nac_alumno']=='Apure') {echo "selected='selected'";}?>>Apure</option>
							<option value="Bolivar" <?php if($row['lugar_nac_alumno']=='Bolivar') {echo "selected='selected'";}?>>Bolivar</option>
							<option value="Barinas" <?php if($row['lugar_nac_alumno']=='Barinas') {echo "selected='selected'";}?>>Barinas</option>
							<option value="Cojedes" <?php if($row['lugar_nac_alumno']=='Cojedes') {echo "selected='selected'";}?>>Cojedes</option>
							<option value="Carabobo" <?php if($row['lugar_nac_alumno']=='Carabobo') {echo "selected='selected'";}?>>Carabobo</option>
							<option value="Distrito Capital" <?php if($row['lugar_nac_alumno']=='Distrito Capital') {echo "selected='selected'";}?>>Distrito Capital</option>
							<option value="Delta Amacuro" <?php if($row['lugar_nac_alumno']=='Delta Amacuro') {echo "selected='selected'";}?>>Delta Amacuro</option>
							<option value="Miranda" <?php if($row['lugar_nac_alumno']=='Miranda') {echo "selected='selected'";}?>>Miranda</option>
							<option value="Merida" <?php if($row['lugar_nac_alumno']=='Merida') {echo "selected='selected'";}?>>Merida</option>
							<option value="Monagas" <?php if($row['lugar_nac_alumno']=='Monagas') {echo "selected='selected'";}?>>Monagas</option>
							<option value="Nueva Esparta" <?php if($row['lugar_nac_alumno']=='Nueva Esparta') {echo "selected='selected'";}?>>Nueva Esparta</option>
							<option value="Portuguesa" <?php if($row['lugar_nac_alumno']=='Portuguesa') {echo "selected='selected'";}?>>Portuguesa</option>
							<option value="Guarico" <?php if($row['lugar_nac_alumno']=='Guarico') {echo "selected='selected'";}?>>Guarico</option>
							<option value="Falcon" <?php if($row['lugar_nac_alumno']=='Falcon') {echo "selected='selected'";}?>>Falcon</option>
							<option value="Lara" <?php if($row['lugar_nac_alumno']=='Lara') {echo "selected='selected'";}?>>Lara</option>
							<option value="Tachira" <?php if($row['lugar_nac_alumno']=='Tachira') {echo "selected='selected'";}?>>Tachira</option>
							<option value="Trujillo" <?php if($row['lugar_nac_alumno']=='Trujillo') {echo "selected='selected'";}?>>Trujillo</option>
							<option value="Sucre" <?php if($row['lugar_nac_alumno']=='Sucre') {echo "selected='selected'";}?>>Sucre</option>
							<option value="Vargas" <?php if($row['lugar_nac_alumno']=='Vargas') {echo "selected='selected'";}?>>Vargas</option>
							<option value="Yaracuy" <?php if($row['lugar_nac_alumno']=='Yaracuy') {echo "selected='selected'";}?>>Yaracuy</option>
							<option value="Zulia" <?php if($row['lugar_nac_alumno']=='Zulia') {echo "selected='selected'";}?>>Zulia</option>
							</select>
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Fecha nacimiento alumno</label>
							<input type="date" class="form-control" id="fecha_nac_alumno" name="fecha_nac_alumno" placeholder="Fecha" value="<?php echo $row['fecha_nac_alumno'] ?>" onblur="calcAge(this.value)">
							</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
							<label for="exampleInputPassword1">Dirección</label>
							<input type="text" class="form-control" onkeypress="return soloLetras(event)" maxlength="50" id="exampleInputPassword1" name="direccion_alumno" placeholder="Dirección del Alumno" value="<?php echo $row['direccion_alumno'] ?>">
							</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 1</label>
							<input type="text" class="form-control" id="exampleInputPassword1" onkeypress="return solonumeros2(event)" maxlength="11" name="tlf1_alumno" placeholder="Telefono" value="<?php echo $row['tlf1_alumno'] ?>">
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 2</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf2_alumno" onkeypress="return solonumeros2(event)" maxlength="11" placeholder="Telefono" value="<?php echo $row['tlf2_alumno'] ?>">
							</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
							<label for="exampleInputPassword1">Telefono 3</label>
							<input type="text" class="form-control" id="exampleInputPassword1" name="tlf3_alumno" onkeypress="return solonumeros2(event)" maxlength="11" placeholder="Telefono" value="<?php echo $row['tlf3_alumno'] ?>">
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
												<input type="text" class="form-control" name="plantel_procedencia" placeholder="U.E.D. Nombre Plantel" value="<?php echo $row['plantel_procedencia'] ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Ultimo grado cursado</label>
												<input type="text" class="form-control" name="ultimo_grado" value="<?php echo $row['ultimo_grado'] ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Estatus</label>
												<br>
												<input type="radio" name="aprobado" id="optionsRadios1" value="Si" <?php if($row['aprobado']=='Si') {echo "checked='checked'";}?>>Aprobado
												<br>
												<input type="radio" name="aprobado" id="optionsRadios1" value="No" <?php if($row['aprobado']=='No') {echo "checked='checked'";}?>>Aplazado
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
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="Si" <?php if($row['carta_conducta']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="carta_conducta" id="optionsRadios1" value="No" <?php if($row['carta_conducta']=='No') {echo "checked='checked'";}?>>No
										</div>
										<div class="col-md-3">
										<label>Boleta/Promocion</label>
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="Si" <?php if($row['boleta_promocion']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="boleta_promocion" id="optionsRadios1" value="No" <?php if($row['boleta_promocion']=='No') {echo "checked='checked'";}?>>No
										</div>
										<div class="col-md-3">
										<label>3 Fotos/Alumno</label>
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="Si" <?php if($row['fotos_alumno']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="fotos_alumno" id="optionsRadios1" value="No" <?php if($row['fotos_alumno']=='No') {echo "checked='checked'";}?>>No
										</div>
										<div class="col-md-3">
										<label>2 Fotos/Representante</label>
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="Si" <?php if($row['fotos_representante']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="fotos_representante" id="optionsRadios1" value="No" <?php if($row['fotos_representante']=='No') {echo "checked='checked'";}?>>No
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-3">
										<label>C.I Representante</label>
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="Si" <?php if($row['ci_representante']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="ci_representante" id="optionsRadios1" value="No" <?php if($row['ci_representante']=='No') {echo "checked='checked'";}?>>No
										</div>
										<div class="col-md-3">
										<label>Copia Partida de Nacimiento</label>
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="Si" <?php if($row['partida_nacimiento']=='Si') {echo "checked='checked'";}?>>Si
										<br>
										<input type="radio" name="partida_nacimiento" id="optionsRadios1" value="No" <?php if($row['partida_nacimiento']=='No') {echo "checked='checked'";}?>>No
										</div>
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
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php if(mysql_num_rows($result2)==0){ ?>
									<tr>
										<td>Sin Resultados...</td>
									</tr>
									<?php } ?>
									<?php while ($row2 = mysql_fetch_array($result2)){?>
									<tr>
									<td><?php echo $row2['id_representante'] ?></td>
									<td><?php echo $row2['tipo_representante'] ?></td>
									<td><?php echo $row2['nombre_representante'] ?></td>
									<td><?php echo $row2['ci_representante'] ?></td>
									<td class="pad"><a class="btn btn-warning" href="editar_representante.php?alumno=<?php echo $row['id_alumno']?>&representante=<?php echo $row2['id_representante']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Editar Representante"><span class="icon-wrench"></span></a></td>
									<!--<td class="pad"><a data-confirm-link="¿Eliminar Representante?" class="btn btn-danger" href="../controlador/eliminar_representante.php?alumno=<?php echo $row['id_alumno']?>&representante=<?php echo $row2['id_representante']?>" role="button" style="border-radius: 0;" data-toggle="tooltip" data-placement="top" title="Eliminar Representate"><span class="icon-cross"></span></a></td>-->
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
											<select name="tipo_vivienda" class="form-control">
												<option value="Habitacion" <?php if($row['tipo_vivienda']=='Habitacion') {echo "selected='selected'";}?>>Habitación</option>
												<option value="Casa" <?php if($row['tipo_vivienda']=='Casa') {echo "selected='selected'";}?>>Casa</option>
												<option value="Apartamento" <?php if($row['tipo_vivienda']=='Apartamento') {echo "selected='selected'";}?>>Apartamento</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Condición de la Vivienda</label>
											<select name="condicion_vivienda" class="form-control">
												<option value="Alquilada" <?php if($row['condicion_vivienda']=='Alquilada') {echo "selected='selected'";}?>>Alquilada</option>
												<option value="Propia" <?php if($row['condicion_vivienda']=='Propia') {echo "selected='selected'";}?>>Propia</option>
												<option value="Prestada" <?php if($row['condicion_vivienda']=='Prestada') {echo "selected='selected'";}?>>Prestada</option>
											</select>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Personas que viven con el alumno</label>
											<input type="text" onkeyup="this.value = hermana(this.value, 1, 10)" class="form-control" name="personas_vivienda" onkeypress="return solonumeros2(event)" maxlength="11" value="<?php echo $row['personas_vivienda'] ?>">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="">Con quien vive el alumno</label>
											<select name="abuelos_vivienda" id="" class="form-control">
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
										<input type="number" onkeypress="return solonumeros2(event)" maxlength="15" name="ingreso_vivienda" class="form-control" placeholder="20.000,00" value="<?php echo $row['ingreso_vivienda'] ?>">
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanas (Hembra)</label>
										<input type="text" onkeyup="this.value = hermana2(this.value, 0, 10)" onkeypress="return solonumeros2(event)" maxlength="11" name="cantidad_hermanas" class="form-control" value="<?php echo $row['cantidad_hermanas'] ?>">
									</div>
									<div class="col-md-3">
										<label for="">Cantidad de Hermanos (Varon)</label>
										<input type="text" onkeyup="this.value = hermana2(this.value, 0, 10)" onkeypress="return solonumeros2(event)" maxlength="11" name="cantidad_hermanos" class="form-control" value="<?php echo $row['cantidad_hermanos'] ?>">
									</div>
									<div class="col-md-3">
										<label for="">Lugar que ocupa entre ellos</label>
										<select name="lugar_ocu_alumno" id="" class="form-control">
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
										<select name="estudian_hermanos" id="" class="form-control">
											<option value="Si" <?php if($row['estudian_hermanos']=='Si') {echo "selected='selected'";}?>>Si</option>
											<option value="No" <?php if($row['estudian_hermanos']=='No') {echo "selected='selected'";}?>>No</option>
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
									<option value="Si" <?php if($row['rec_medico']=='Si') {echo "selected='selected'";}?>>Tiene Registro Medico</option>
									<option value="No" <?php if($row['rec_medico']=='No') {echo "selected='selected'";}?>>No tiene Registro Medico</option>
								</select>
							<div id="medic" <?php if($row['rec_medico']=='Si') {echo "style='display: none;'";}?>>
								<div class="section">
	<h4>F.-ASPECTOS DE SALUD DEL ALUMNO</h4>
	<div class="row">
		<div class="col-md-3">
			<label for="">Vacunas que posee</label>
			<div class="checkbox" style="margin-left: 9%;">
				<input type="checkbox" name="vacuna_triple" value="Si" <?php if($row['vacuna_triple']=='Si') {echo "checked='checked'";}?>>Triple
				<br>
				<input type="checkbox" name="vacuna_bcg" value="Si" <?php if($row['vacuna_bcg']=='Si') {echo "checked='checked'";}?>>Bcg
				<br>
				<input type="checkbox" name="vacuna_polio" value="Si" <?php if($row['vacuna_polio']=='Si') {echo "checked='checked'";}?>>Polio
				<br>
				<input type="checkbox" name="vacuna_hepab" value="Si" <?php if($row['vacuna_hepab']=='Si') {echo "checked='checked'";}?>>Hepatitis B
				<br>
				<input type="checkbox" name="vacuna_meningitis" value="Si" <?php if($row['vacuna_meningitis']=='Si') {echo "checked='checked'";}?>>Meningitis
			</div>
		</div>
		<div class="col-md-3">
			<label>¿Es asmatico?</label>
			<br>
			<input type="radio" name="asmatico" id="optionsRadios1" value="Si" <?php if($row['asmatico']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="asmatico" id="optionsRadios1" value="No" <?php if($row['asmatico']=='No') {echo "checked='checked'";}?>>No
		</div>
		<div class="col-md-3">
			<label>¿Es Diabetico?</label>
			<br>
			<input type="radio" name="diabetico" id="optionsRadios1" value="Si" <?php if($row['diabetico']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="diabetico" id="optionsRadios1" value="No" <?php if($row['diabetico']=='No') {echo "checked='checked'";}?>>No
		</div>
		<div class="col-md-3">
			<label>¿Es Alergico?</label>
			<br>
			<input type="radio" name="alergico" id="optionsRadios1" value="Si" <?php if($row['alergico']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="alergico" id="optionsRadios1" value="No" <?php if($row['alergico']=='No') {echo "checked='checked'";}?>>No
			<br>
			<label>¿A que?</label>
			<input type="text" class="form-control" name="observacion_alergia" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_alergia'] ?>">
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<label>¿Tiene control medico periódico?</label>
			<br>
			<input type="radio" name="control_medico" id="optionsRadios1" value="Si" <?php if($row['control_medico']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="control_medico" id="optionsRadios1" value="No" <?php if($row['control_medico']=='No') {echo "checked='checked'";}?>>No
			<br>
			<label>¿Donde?</label>
			<input type="text" class="form-control" name="observacion_control" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_control'] ?>">
		</div>
		<div class="col-md-3">
			<label>Medicamento que le suministra en caso de fiebre</label>
			<input type="text" name="suministro_fiebre" class="form-control" value="<?php echo $row['suministro_fiebre'] ?>">
		</div>
		<div class="col-md-3">
			<label for="">Posee alguna dificultad</label>
			<select name="tipo_dificultad" id="" class="form-control">
				<option value="Auditiva" <?php if($row['tipo_dificultad']=='Auditiva') {echo "selected='selected'";}?>>Auditiva</option>
				<option value="Lenguaje" <?php if($row['tipo_dificultad']=='Lenguaje') {echo "selected='selected'";}?>>Lenguaje</option>
				<option value="Motora" <?php if($row['tipo_dificultad']=='Motora') {echo "selected='selected'";}?>>Motora</option>
			</select>
		</div>
		<div class="col-md-3">
			<label for="">¿Ha sido intervenido quirúrgicamente?</label>
			<br>
			<input type="radio" name="operacion" id="optionsRadios1" value="Si" <?php if($row['operacion']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="operacion" id="optionsRadios1" value="No" <?php if($row['operacion']=='No') {echo "checked='checked'";}?>>No
			<br>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-3">
			<label for="">¿Alguna vez ha sido referido al psicólogo?</label>
			<br>
			<input type="radio" name="psicologo" id="optionsRadios1" value="Si" <?php if($row['psicologo']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="psicologo" id="optionsRadios1" value="No" <?php if($row['psicologo']=='No') {echo "checked='checked'";}?>>No
			<br>
		</div>
		<div class="col-md-3">
			<label>¿Alguna vez a sido referido al psicópedagogo?</label>
			<br>
			<input type="radio" name="psicopedagogo" id="optionsRadios1" value="Si" <?php if($row['psicopedagogo']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="psicopedagogo" id="optionsRadios1" value="No" <?php if($row['psicopedagogo']=='No') {echo "checked='checked'";}?>>No
			<br>
			<label>Razones - Referencias</label>
			<input type="text" class="form-control" name="observaciones_psicopedagogo" placeholder="Esto puede ir vacio" value="<?php echo $row['observaciones_psicopedagogo'] ?>">
		</div>
		<div class="col-md-3">
			<label for="">¿Tiene impedimento para realizar Educ. Fisica y Deportes?</label>
			<br>
			<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="Si" <?php if($row['impedimento_fisico']=='Si') {echo "checked='checked'";}?>>Si
			<br>
			<input type="radio" name="impedimento_fisico" id="optionsRadios1" value="No" <?php if($row['impedimento_fisico']=='No') {echo "checked='checked'";}?>>No
			<br>
			<label>Razones</label>
			<input type="text" onkeypress="return soloLetras(event)" maxlength="50" class="form-control" name="observacion_impedimento" placeholder="Esto puede ir vacio" value="<?php echo $row['observacion_impedimento'] ?>">
		</div>
	</div>
</div>
							</div>
							<hr class="divisor">
							<button type="submit" class="btn btn-warning"><span class="icon-scissors"></span> Editar</button>
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
		<script src="js/demo.js" type="text/javascript"></script>
		<script src="js/custom2.js" type="text/javascript"></script>
	</body>
</html>
