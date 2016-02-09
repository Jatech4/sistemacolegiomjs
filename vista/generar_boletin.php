<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_grados = mysql_query("SELECT * FROM grados");
$result_alumnos = mysql_query("SELECT * FROM alumnos");
$result_docentes = mysql_query("SELECT * FROM docentes");
$result_ano_escolar = mysql_query("SELECT * FROM ano_escolar ORDER BY id_ano_escolar DESC");
if(isset($_GET['alumno']))
{
$sql="SELECT * FROM alumnos a, representantes b, procedencia_alumno c where a.id_alumno=".$_GET['alumno']." and b.id_alumno=".$_GET['alumno']." and c.id_alumno=".$_GET['alumno']."";
$result_alumno_select = mysql_query($sql);
$result_repre_select = mysql_query("SELECT * FROM representantes where id_alumno=".$_GET['alumno']."");
$row_alumno_select = mysql_fetch_array($result_alumno_select);
if($row_alumno_select['aprobado']=='Si'){
	$sig_grado=$row_alumno_select['ultimo_grado']+1;
}else{
$sig_grado=$row_alumno_select['ultimo_grado'];
}
	if(!$row_alumno_select){ ?>
	<script language='JavaScript'>
				alert('ERROR: El Alumno debe poseer al menos 1 Representante registrado');
	</script>";
	<?php
	}
}

?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Boletin?')){
       			document.form.submit()
    			}
			}
			</script>
<div class="content-wrapper"> <!-- Maricater es aqui iojdfgjiosdfijogsd -->
	<section class="content-header">
		<h1>Generar Boletín Informativo</h1>
		<br>
		<small><i>(*) Campos Obligatorios</i></small>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!--<h5>Generar Boletin N°: {NUMERO ID_ROW DEL BOLETIN}</h5>-->
				<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_boletin.php" onsubmit="enviar()">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<div class="row">
						<div class="col-md-3">
							<label for="#">Estudiante: (*)</label>
							<select class="form-control" name="id_alumno" id="#" onchange="location.href='generar_boletin.php?alumno=' + this.value" required>
								<option value="" selected disabled>Seleccione</option>
								<?php while ($row_alumno = mysql_fetch_array($result_alumnos)){?>
								<option value="<?php echo $row_alumno['id_alumno']?>"
								<?php
								if(isset($_GET['alumno'])) {
    								if($row_alumno['id_alumno']==$row_alumno_select['id_alumno']) {echo "selected='selected'";}
								}
								?>
								><?php echo $row_alumno['nombres_alumno']." ".$row_alumno['apellidos_alumno'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="#">Año Escolar: (*)</label>
							<select class="form-control" name="ano_escolar" required>
							<option value="" selected disabled>Seleccione</option>
							<?php while ($row_ano_escolar = mysql_fetch_array($result_ano_escolar)){?>
							<option value="<?php echo $row_ano_escolar['id_ano_escolar']?>"><?php echo $row_ano_escolar['ano_escolar']?></option>
							<?php } ?>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Nombres:</label>
								<input type="text" class="form-control" onkeypress="return soloLetras(event)" maxlength="20" name="###" id="exampleInputPassword1" placeholder="Nombres" value="<?php echo $row_alumno_select['nombres_alumno'] ?>" disabled>
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Apellidos:</label>
							<input type="text" class="form-control" onkeypress="return soloLetras(event)" maxlength="20" name="###" id="exampleInputPassword1" placeholder="Apellidos" value="<?php echo $row_alumno_select['apellidos_alumno'] ?>" disabled>
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Grado: (*)</label>
							<select class="form-control" name="grado" id="grado" required>
							<option value="" selected disabled>Seleccione</option>
							<?php while ($row_grados = mysql_fetch_array($result_grados)){?>
							<option value="<?php echo $row_grados['id_grado'];?>"
							<?php if($row_grados['id_grado']==$sig_grado) {echo "selected='selected'";}?>
							><?php echo $row_grados['grado']?></option>
							<?php } ?>
							</select>
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sección: (*)</label>
							<select class="form-control" name="seccion" id="seccion" required>
								<option value="" selected disabled>Seleccione</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Edad:</label>
								<input type="number" class="form-control" disabled onkeypress="return solonumeros2(event)" maxlength="20" name="###" id="exampleInputPassword1" placeholder="Edad" value="<?php echo $row_alumno_select['edad_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sexo:</label>
								<input type="text" class="form-control" disabled name="###" id="exampleInputPassword1" placeholder="Sexo" value="<?php if($row_alumno_select['sexo_alumno']=='M') {echo 'Masculino';}elseif($row_alumno_select['sexo_alumno']=='F'){echo 'Femenino';} ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Lugar de Nacimiento:</label>
								<input type="text" class="form-control" disabled name="###" id="exampleInputPassword1" placeholder="Lugar de Nacimiento" value="<?php echo $row_alumno_select['lugar_nac_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Fecha Nacimiento:</label>
								<input type="text" class="form-control" disabled name="###" id="exampleInputPassword1" placeholder="Fecha de Nacimiento" value="<?php echo $row_alumno_select['fecha_nac_alumno'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">CE/CI Alumno:</label>
								<input type="text" class="form-control" disabled name="###" id="exampleInputPassword1" placeholder="C.I" value="<?php echo $row_alumno_select['cedula_alumno'] ?>">
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Docente: (*)</label>
							<select class="form-control" name="id_docente" id="#" required>
								<option value="" selected disabled>Seleccione</option>
								<?php while ($row_docente = mysql_fetch_array($result_docentes)){?>
								<option value="<?php echo $row_docente['id_docente']?>"><?php echo $row_docente['nombre_docente']?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Representante: (*)</label>
							<select class="form-control" name="id_representante" id="#">
							<?php while ($row_representantes = mysql_fetch_array($result_repre_select)){?>
								<option value="<?php echo $row_representantes['id_representante']?>"><?php echo $row_representantes['nombre_representante']?></option>
							<?php } ?>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>I MOMENTO EVALUATIVO</h3>
							<h4>Diagnóstico</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pull-right">
							<label for="exampleInputPassword1">Desde:</label>
							<input type="date" class="form-control" name="fecha_desde_momento1" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento1" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones Generales de la Actuación del Estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_gen_momento1"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento1"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento1"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento1"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="dias_hab_momento1" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="asistencias_momento1" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="inasistencias_momento1" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento1" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Nota:</label>
							<select name="nota_momento1" id="nota_momento1" class="form-control">
							<option value="">...</option>
							  <option value="A">A</option>
							  <option value="B">B</option>
							  <option value="C">C</option>
							  <option value="D">D</option>
							  <option value="E">E</option>
							  <option value="F">F</option>
							</select>
							</div>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>II MOMENTO EVALUATIVO</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pull-right">
							<label for="exampleInputPassword1">Desde:</label>
							<input type="date" class="form-control" name="fecha_desde_momento2" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento2" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento2" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento2"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento2"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento2"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento2"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" onkeypress="return solonumeros(event)" maxlength="2" class="form-control" name="dias_hab_momento2" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" onkeypress="return solonumeros(event)" maxlength="2" class="form-control" name="asistencias_momento2" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" onkeypress="return solonumeros(event)" maxlength="2" class="form-control" name="inasistencias_momento2" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento2" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Nota:</label>
							<select name="nota_momento2" id="nota_momento2" class="form-control">
							<option value="">...</option>
							  <option value="A">A</option>
							  <option value="B">B</option>
							  <option value="C">C</option>
							  <option value="D">D</option>
							  <option value="E">E</option>
							  <option value="F">F</option>
							</select>
							</div>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>III MOMENTO EVALUATIVO</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pull-right">
							<label for="exampleInputPassword1">Desde:</label>
							<input type="date" class="form-control" name="fecha_desde_momento3" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento3" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento3" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento3"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="dias_hab_momento3" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="asistencias_momento3" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" onkeypress="return solonumeros(event)" maxlength="2" name="inasistencias_momento3" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento3" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Nota:</label>
							<select name="nota_momento3" id="nota_momento3" class="form-control">
							<option value="">...</option>
							  <option value="A">A</option>
							  <option value="B">B</option>
							  <option value="C">C</option>
							  <option value="D">D</option>
							  <option value="E">E</option>
							  <option value="F">F</option>
							</select>
							</div>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>IV MOMENTO EVALUATIVO</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group pull-right">
							<label for="exampleInputPassword1">Desde:</label>
							<input type="date" class="form-control" name="fecha_desde_momento4" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento4" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento4" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento4"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento4"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento4"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento4"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="dias_hab_momento4" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento4" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento4" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento4" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Nota:</label>
							<select name="nota_momento4" id="nota_momento4" class="form-control">
							<option value="">...</option>
							  <option value="A">A</option>
							  <option value="B">B</option>
							  <option value="C">C</option>
							  <option value="D">D</option>
							  <option value="E">E</option>
							  <option value="F">F</option>
							</select>
							</div>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3>V MOMENTO EVALUATIVO</h3>
							<h4>INFORME FINAL DE RENDIMIENTO</h4>
						</div>
					</div>
					<div class="row">
					    <div class="col-md-offset-3 col-md-6">

							 Literal Obtenido <input type="text" name="literal" class="form-control" placeholder="Literal"> Expresa: <input type="text" name="expresa" class="form-control" placeholder="Expresa">
					    </div>
					</div>
					<div class="row">
					    <div class="col-md-6">
					        <h4 class="text-left">
					            Por lo que el estudiante fue:
					        </h4>
					        <div class="radio" style="margin-left: 20px;">
                                <input type="radio" name="promovido" id="optionsRadios1" value="Si"> Promovido
                                <br>
                                <input type="radio" name="promovido" id="optionsRadios1" value="No"> No Promovido
                            </div>
					    </div>
					</div>
					<div class="row">
					    <div class="col-md-3">
					        <h4 class="text-left">
					            Al Grado Inmediato superior:
					        </h4>
					        <input type="text" class="form-control" name="grado_superior">
					    </div>
					</div>

				<hr class="divisoor">
				<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Agregar</button>
				<a class="btn btn-info pull-right" href="crear_boletin.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
			</form>
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