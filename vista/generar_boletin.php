<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_alumnos = mysql_query("SELECT * FROM alumnos");
$result_docentes = mysql_query("SELECT * FROM docentes");
$result_ano_escolar = mysql_query("SELECT * FROM ano_escolar");
if(isset($_GET['alumno'])) 
{
$result_alumno_select = mysql_query("SELECT * FROM alumnos a, representantes b where a.id_alumno=".$_GET['alumno']." and b.id_alumno=".$_GET['alumno']."");
$result_repre_select = mysql_query("SELECT * FROM representantes where id_alumno=".$_GET['alumno']."");
$row_alumno_select = mysql_fetch_array($result_alumno_select);
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
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!--<h5>Generar Boletin N°: {NUMERO ID_ROW DEL BOLETIN}</h5>-->
				<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_boletin.php">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<h4>Generar Boletín Informativo</h4>
					<div class="row">
						<div class="col-md-3">
							<label for="#">Estudiante:</label>
							<select class="form-control" name="id_alumno" id="#" onchange="location.href='generar_boletin.php?alumno=' + this.value" >
								<?php while ($row_alumno = mysql_fetch_array($result_alumnos)){?>
								<option value="000">...</option>
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
							<label for="#">Año Escolar:</label>
							<select class="form-control" name="ano_escolar">
							<option value="000">...</option>
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
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE NOMBRE DEL ALUMNO}" value="<?php echo $row_alumno_select['nombres_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Apellidos:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE APELLIDO DEL ALUMNO}" value="<?php echo $row_alumno_select['apellidos_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Grado:</label>
							<select class="form-control" name="grado" id="grado">
								<option value="000">...</option>
								<option value="1ro">1ro</option>
								<option value="2do">2do</option>
								<option value="3ro">3ro</option>
								<option value="4to">4to</option>
								<option value="5to">5to</option>
								<option value="6to">6to</option>								
							</select>
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sección:</label>
							<select class="form-control" name="seccion" id="seccion">
								<option value="000">...</option>
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
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE EDAD DEL ALUMNO}" value="<?php echo $row_alumno_select['edad_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sexo:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE SEXO DEL ALUMNO}" value="<?php if($row_alumno_select['sexo_alumno']=='M') {echo 'Masculino';}elseif($row_alumno_select['sexo_alumno']=='F'){echo 'Femenino';} ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Lugar de Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE LUGAR DEL ALUMNO}" value="<?php echo $row_alumno_select['lugar_nac_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Fecha Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE FECHA DEL ALUMNO}" value="<?php echo $row_alumno_select['fecha_nac_alumno'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">CE/CI Alumno:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE CEDULA DEL ALUMNO}" value="<?php echo $row_alumno_select['cedula_alumno'] ?>">
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Docente:</label>
							<select class="form-control" name="id_docente" id="#">
								<option value="000">...</option>
								<?php while ($row_docente = mysql_fetch_array($result_docentes)){?>
								<option value="<?php echo $row_docente['id_docente']?>"><?php echo $row_docente['nombre_docente']?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Representante:</label>
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
							<input type="text" class="form-control" name="dias_hab_momento1" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento1" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento1" id="exampleInputPassword1">
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
							<input type="text" class="form-control" name="dias_hab_momento2" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento2" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento2" id="exampleInputPassword1">
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
							<input type="text" class="form-control" name="dias_hab_momento3" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento3" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento3" id="exampleInputPassword1">
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
				
				<hr class="divisoor">
				<button type="button" class="btn btn-success" onClick="enviar()"><span class="icon-user-plus"></span> Agregar</button>
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