<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result_docentes = mysql_query("SELECT * FROM docentes");
if(isset($_GET['boletin'])) 
{
$result_repre_select = mysql_query("SELECT * FROM representantes a, boletines b where a.id_alumno=b.id_alumno and b.id_boletin=".$_GET['boletin']."");
$result_boletin_select=mysql_query("SELECT * FROM boletines a, alumnos b WHERE a.id_alumno=b.id_alumno and a.id_boletin=".$_GET['boletin']."");
$row_boletin=mysql_fetch_array($result_boletin_select);
}
?>
			<!--  Contenido -->
			<script language="JavaScript"> 
				function enviar(){ 
    			if (confirm('¿Modificar Boletin?')){ 
       			document.form.submit() 
    			} 
			} 	
			</script>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<!--<h5>Generar Boletin N°: {NUMERO ID_ROW DEL BOLETIN}</h5>-->
				<form class="formulario" name="form" id="form" method="POST" action="../controlador/editar_boletin.php">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="<?php echo $_GET['boletin'] ?>">
					<h4>Generar Boletín Informativo</h4>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Estudiante:</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 pull-left">
							<div class="form-group">
								<label for="exampleInputPassword1">Desde: 
								<select name="#" id="#" class="form-control">
									<option value="#"></option>
								</select>
								</label>
							</div>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Nombres:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE NOMBRE DEL ALUMNO}" value="<?php echo $row_boletin['nombres_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Apellidos:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE APELLIDO DEL ALUMNO}" value="<?php echo $row_boletin['apellidos_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Grado:</label>
							<select class="form-control" name="grado" id="grado">
								<option value="000">...</option>
								<option value="1ro" <?php if($row_boletin['grado']=='1ro') {echo "selected='selected'";}?>>1ro</option>
								<option value="2do" <?php if($row_boletin['grado']=='2do') {echo "selected='selected'";}?>>2do</option>
								<option value="3ro" <?php if($row_boletin['grado']=='3ro') {echo "selected='selected'";}?>>3ro</option>
								<option value="4to" <?php if($row_boletin['grado']=='4to') {echo "selected='selected'";}?>>4to</option>
								<option value="5to" <?php if($row_boletin['grado']=='5to') {echo "selected='selected'";}?>>5to</option>
								<option value="6to" <?php if($row_boletin['grado']=='6to') {echo "selected='selected'";}?>>6to</option>								
							</select>
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sección:</label>
							<select class="form-control" name="seccion" id="seccion">
								<option value="000">...</option>
								<option value="A" <?php if($row_boletin['seccion']=='A') {echo "selected='selected'";}?>>A</option>
								<option value="B" <?php if($row_boletin['seccion']=='B') {echo "selected='selected'";}?>>B</option>
								<option value="C" <?php if($row_boletin['seccion']=='C') {echo "selected='selected'";}?>>C</option>
								<option value="D" <?php if($row_boletin['seccion']=='D') {echo "selected='selected'";}?>>D</option>
								<option value="E" <?php if($row_boletin['seccion']=='E') {echo "selected='selected'";}?>>E</option>
								<option value="F" <?php if($row_boletin['seccion']=='F') {echo "selected='selected'";}?>>F</option>								
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Edad:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE EDAD DEL ALUMNO}" value="<?php echo $row_boletin['edad_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sexo:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE SEXO DEL ALUMNO}" value="<?php if($row_boletin['sexo_alumno']=='M') {echo 'Masculino';}elseif($row_alumno_select['sexo_alumno']=='F'){echo 'Femenino';} ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Lugar de Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE LUGAR DEL ALUMNO}" value="<?php echo $row_boletin['lugar_nac_alumno'] ?>">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Fecha Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE FECHA DEL ALUMNO}" value="<?php echo $row_boletin['fecha_nac_alumno'] ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">CE/CI Alumno:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE CEDULA DEL ALUMNO}" value="<?php echo $row_boletin['cedula_alumno'] ?>">
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Docente:</label>
							<select class="form-control" name="id_docente" id="#">
								<option value="000">...</option>
								<?php while ($row_docente = mysql_fetch_array($result_docentes)){?>
								<option value="<?php echo $row_docente['id_docente']?>" <?php if($row_boletin['id_docente']==$row_docente['id_docente']) {echo "selected='selected'";}?>><?php echo $row_docente['nombre_docente']?></option>
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
								<option value="<?php echo $row_representantes['id_representante']?>" <?php if($row_boletin['id_representante']==$row_representantes['id_representante']) {echo "selected='selected'";}?>><?php echo $row_representantes['nombre_representante']?></option>
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
							<input type="date" class="form-control" name="fecha_desde_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_desde_momento1'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_hasta_momento1'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones Generales de la Actuación del Estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_gen_momento1"><?php echo $row_boletin['observaciones_gen_momento1'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento1"><?php echo $row_boletin['recomendaciones_doc_momento1'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento1"><?php echo $row_boletin['observaciones_alumno_momento1'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento1"><?php echo $row_boletin['observaciones_rep_momento1'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="dias_hab_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['dias_hab_momento1'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['asistencias_momento1'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['inasistencias_momento1'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento1" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_momento1'] ?>">
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
							<input type="date" class="form-control" name="fecha_desde_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_desde_momento2'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_hasta_momento2'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['proyecto_momento2'] ?>">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento2"><?php echo $row_boletin['informe_glob_momento2'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento2"><?php echo $row_boletin['recomendaciones_doc_momento2'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento2"><?php echo $row_boletin['observaciones_alumno_momento2'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento2"><?php echo $row_boletin['observaciones_rep_momento2'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="dias_hab_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['dias_hab_momento2'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['asistencias_momento2'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['inasistencias_momento2'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento2" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_momento2'] ?>">
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
							<input type="date" class="form-control" name="fecha_desde_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_desde_momento3'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_hasta_momento3'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['proyecto_momento3'] ?>">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento3"><?php echo $row_boletin['informe_glob_momento3'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento3"><?php echo $row_boletin['recomendaciones_doc_momento3'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento3"><?php echo $row_boletin['observaciones_alumno_momento3'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento3"><?php echo $row_boletin['observaciones_rep_momento3'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="dias_hab_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['dias_hab_momento3'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['asistencias_momento3'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['inasistencias_momento3'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento3" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_momento3'] ?>">
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
							<input type="date" class="form-control" name="fecha_desde_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_desde_momento4'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="fecha_hasta_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_hasta_momento4'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="proyecto_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['proyecto_momento4'] ?>">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="informe_glob_momento4"><?php echo $row_boletin['informe_glob_momento4'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="recomendaciones_doc_momento4"><?php echo $row_boletin['recomendaciones_doc_momento4'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="observaciones_alumno_momento4"><?php echo $row_boletin['observaciones_alumno_momento4'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="observaciones_rep_momento4"><?php echo $row_boletin['observaciones_rep_momento4'] ?></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="dias_hab_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['dias_hab_momento4'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="asistencias_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['asistencias_momento4'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="inasistencias_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['inasistencias_momento4'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="fecha_momento4" id="exampleInputPassword1" value="<?php echo $row_boletin['fecha_momento4'] ?>">
							</div>
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