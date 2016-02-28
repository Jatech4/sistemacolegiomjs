<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
?>
			<!--  Contenido -->
			<script language="JavaScript">
				function enviar(){
    			if (confirm('¿Registrar Modelo de Canaima?')){
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
				<form class="formulario" name="form" id="form" method="POST" action="../controlador/registrar_mod_canaima.php" onsubmit="enviar()">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<h4>Registrar Modelo de Canaima</h4>
					<br>
					<small><i>(*) Campos Obligatorios</i></small>
					<div class="row">
						<div class="col-md-4 col-md-offset-3" style="margin-left: 30%;">
							<div class="form-group">
								<label for="exampleInputPassword1">Nombre: (*)</label>
								<input type="text"  class="form-control" name="nombre_modelo" id="exampleInputPassword1" required>
								<br>
								<label for="exampleInputPassword1">Modelo: (*)</label>
								<input type="text"  class="form-control" name="serial_modelo" id="exampleInputPassword1" required>
							</div>
						</div>
					</div>
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