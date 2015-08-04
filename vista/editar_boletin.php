<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php"
?>
<!--  Contenido -->
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<h5>Editar Boletin N°: {NUMERO ID_ROW DEL BOLETIN}</h5>
				<form class="formulario" name="form" id="form" method="POST" action="#">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<h4>Editar Boletín Informativo</h4>
					<div class="row">
						<div class="col-md-3 pull-left">
							<div class="form-group">
								<label for="exampleInputPassword1">Desde - Hasta:</label>
								<input type="text" class="form-control" name="ano_escolar" id="exampleInputPassword1" placeholder="Ejem: 2016-2017">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Estudiante:</label>
							<select class="form-control" name="id_alumno" id="#">
								<option value="#">{AQUI VA UNA LISTA DE LOS ALUMNOS DISPONIBLES}</option>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Nombres:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE NOMBRE DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Apellidos:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE APELLIDO DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Grado:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE GRADO DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sección:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE SECCIÓN DEL ALUMNO}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Edad:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE EDAD DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Sexo:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE SEXO DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Lugar de Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE LUGAR DEL ALUMNO}">
						</div>
						<div class="col-md-3">
							<label for="exampleInputPassword1">Fecha Nacimiento:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE FECHA DEL ALUMNO}">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">CE/CI Alumno:</label>
								<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE CEDULA DEL ALUMNO}">
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Docente:</label>
							<select class="form-control" name="id_alumno" id="#">
								<option value="#">{AQUI VA UNA LISTA DE LOS DOCENTES DISPONIBLES}</option>
							</select>
						</div>
					</div>
					<hr class="divisoor">
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">Representante:</label>
							<select class="form-control" name="id_alumno" id="#">
								<option value="#">{AQUI VA UNA LISTA DE LOS DOCENTES DISPONIBLES}</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<label for="exampleInputPassword1">CI Representante</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1" placeholder="{SE TRAE CEDULA DEL REPRESENTANTE}">
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
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones Generales de la Actuación del Estudiante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
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
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
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
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
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
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group pull-left">
								<label for="#">Hasta:</label>
								<input type="date" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
							<label for="exampleInputPassword1">PROYECTO:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Informe Descriptivo Globalizado:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Recomendaciones del Docente:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del estudiante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="exampleInputPassword1">Observaciones del Representante:</label>
							<textarea class="form-control" rows="3" name="##"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Dias hábiles:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Asistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
							<label for="exampleInputPassword1">Inasistencias:</label>
							<input type="text" class="form-control" name="###" id="exampleInputPassword1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
							<label for="exampleInputPassword1">Fecha:</label>
							<input type="date" class="form-control" name="###" id="exampleInputPassword1">
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