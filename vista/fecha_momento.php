<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
$result = mysql_query("SELECT * FROM ano_escolar WHERE id_ano_escolar=".$_GET['id']."");
mysql_set_charset('utf8');
$row = mysql_fetch_array($result);
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Fechas de Momentos?')){
       			document.form.submit()
    			}
			}
			</script>
			<script language="JavaScript">
			function solonumeros(evt){
			// Backspace = 8, Enter = 13, ’0' = 48, ’9' = 57, ‘.’ = 46
			var key = nav4 ? evt.which : evt.keyCode;
			return (key <= 13 || (key >= 48 && key <= 57));
			}
			var nav4 = window.Event ? true : false;
			function solonumeros1(evt){
			// Backspace = 8, Enter = 13, ’0' = 48, ’9' = 57, ‘.’ = 46
			var key = nav4 ? evt.which : evt.keyCode;
			return (key <= 12 || (key >= 48 && key <= 57));
			}

			</script>
<div class="content-wrapper">
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_fecha_ano.php" onsubmit="enviar()">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<h4>Registro de Fecha de Momentos para el Año Escolar: <?php echo $row['ano_escolar']?></h4>
					<br>
					<small><i>(*) Campos Obligatorios</i></small>
					<div class="row form-group">
						<h4>Momento 1</h4>
						<div class="col-md-6">
								<label for="exampleInputPassword1">Desde: (*)</label>
								<select class="form-control gay1" name="">
										<option value="Enero">Enero</option>
										<option value="Febrero">Febrero</option>
										<option value="Marzo">Marzo</option>
										<option value="Abril">Abril</option>
										<option value="Mayo">Mayo</option>
										<option value="Junio">Junio</option>
										<option value="Julio">Julio</option>
										<option value="Agosto">Agosto</option>
										<option value="Septiembre">Septiembre</option>
										<option value="Octubre">Octubre</option>
										<option value="Noviembre">Noviembre</option>
								</select>
						</div>
						<div class="col-md-6">
									<label for="#">Hasta: (*)</label>
									<select class="form-control gay2" name="">
											
									</select>
						</div>
					</div> <!-- Fin Primer Select -->
					<div class="row form-group">
						<h4>Momento 2</h4>
						<div class="col-md-6">
								<label for="exampleInputPassword1">Desde: (*)</label>
								<select class="form-control gay1" name="">
										<option value="Enero">Enero</option>
										<option value="Febrero">Febrero</option>
										<option value="Marzo">Marzo</option>
										<option value="Abril">Abril</option>
										<option value="Mayo">Mayo</option>
										<option value="Junio">Junio</option>
										<option value="Julio">Julio</option>
										<option value="Agosto">Agosto</option>
										<option value="Septiembre">Septiembre</option>
										<option value="Octubre">Octubre</option>
										<option value="Noviembre">Noviembre</option>
								</select>
						</div>
						<div class="col-md-6">
									<label for="#">Hasta: (*)</label>
									<select class="form-control gay2" name="">
											<option value="Enero">Enero</option>
											<option value="Febrero">Febrero</option>
											<option value="Marzo">Marzo</option>
											<option value="Abril">Abril</option>
											<option value="Mayo">Mayo</option>
											<option value="Junio">Junio</option>
											<option value="Julio">Julio</option>
											<option value="Agosto">Agosto</option>
											<option value="Septiembre">Septiembre</option>
											<option value="Octubre">Octubre</option>
											<option value="Noviembre">Noviembre</option>
											<option value="Diciembre">Diciembre</option>
									</select>
						</div>
					</div> <!-- Fin Segundo Select -->
					<br>
					<hr class="divisoor">
					<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Registrar</button>
					<a class="btn btn-info pull-right" href="registrar_ano_escolar.php" role="button"><span class="icon-undo2"></span>  Regresar</a>
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
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>
