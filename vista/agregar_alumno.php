<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM alumnos a, procedencia_alumno b, documentos_presentados c, situacion_economica d, salud_alumno e WHERE a.id_alumno=b.id_alumno AND a.id_alumno=c.id_alumno AND a.id_alumno=d.id_alumno AND a.id_alumno=e.id_alumno");
mysql_set_charset('utf8');
include_once "menu.php"
?>
			<!--  Contenido -->
			<script language="JavaScript"> 
				function enviar(){ 
    			if (confirm('¿Eliminar Alumno?')){ 
       			document.form.submit() 
    			} 
			} 	
			</script>
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Alumno
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_alumno.php" role="button"><span class="icon-plus"></span>  Agregar</a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Alumnos Registrados en el sistema.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Cedula</th>
									<th>Cantidad de Representantes</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_alumno'] ?></td>
									<td><?php echo $row['nombres_alumno'] ?></td>
									<td><?php echo $row['apellidos_alumno'] ?></td>
									<td><?php echo $row['cedula_alumno'] ?></td>
									<td></td>
									<td><a class="btn btn-info" href="agregar_representante.php" role="button" style="border-radius: 0;"><span class="icon-plus"></span> Agregar Representante</a></td>
									<td><a class="btn btn-primary" href="ver_alumno.php" role="button" style="border-radius: 0;"><span class="icon-eye"></span> Ver Registro</a></td>
									<td><a class="btn btn-warning" href="editar_alumno.php?alumno=<?php echo $row['id_alumno']?>" role="button" style="border-radius: 0;"><span class="icon-wrench"></span> Editar</a></td>
									<td><a class="btn btn-danger" href="#" role="button" style="border-radius: 0;"><span class="icon-cross"></span> Eliminar</a></td>
									</tr>
									<?php } ?>
									</tbody>
									</table>
								</div>
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