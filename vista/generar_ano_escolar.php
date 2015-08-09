<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
include_once "menu.php";
?>
			<!--  Contenido -->
			<script language="JavaScript"> 
				function enviar(){ 
    			if (confirm('¿Registrar Docente?')){ 
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
				<!--<h5>Generar Boletin N°: {NUMERO ID_ROW DEL BOLETIN}</h5>-->
				<form class="formulario" name="form" id="form" method="POST" action="#">
					<input type="hidden" class="form-control" id="exampleInputPassword1" name="id" id="id" value="#">
					<h4>Generar Boletín Informativo</h4>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputPassword1">Desde: </label>
								<input type="text" maxlength="4" onkeypress="return solonumeros(event)" class="form-control" name="ano_escolar1" id="exampleInputPassword1" placeholder="Ejem: 2016">
							</div>
						</div>
						<div class="col-md-6">
								<label for="#">Hasta:</label>
								<input type="text" maxlength="4" onkeypress="return solonumeros(event)" class="form-control" name="ano_escolar2" id="exampleInputPassword1" placeholder="Ejem: 2017">
						</div>
					</div>
				<hr class="divisoor">
				<button type="submit" class="btn btn-success"><span class="icon-user-plus"></span> Agregar</button>
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
</body>
</html>