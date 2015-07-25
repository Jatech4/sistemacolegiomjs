<!-- index.html -->
<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$result = mysql_query("SELECT * FROM usuarios, perfil_usuario where perfil_usuario=id_perfil");
mysql_set_charset('utf8');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Admin - Martin J. Sanabria</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="font.css">
		<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<link href="css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			
			<header class="main-header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>Admin</b>MJS</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="glyphicon glyphicon-th-list" data-toggle="offcanvas" role="button">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-cog"></i> <span class="hidden-xs"><?php echo $_SESSION['usuario'];?></span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image" />
										<p>
											<?php echo $_SESSION['usuario'];?>
										</p>
									</li>
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">
											<a href="#" class="btn btn-default btn-flat"><span class="icon-user"></span> Perfil</a>
										</div>
										<div class="pull-right">
											<a href="../controlador/cierresesion.php" class="btn btn-default btn-flat"><span class="icon-exit"></span> Salir</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<aside class="main-sidebar">
				<section class="sidebar">
					<div class="user-panel">
						<div class="pull-left image">
							<img src="img/user2-160x160.jpg" class="img-circle" alt="User Image" />
						</div>
						<div class="pull-left info">
							<p><?php echo $_SESSION['usuario'];?></p>
						</div>
					</div>
					<ul class="sidebar-menu">
						<li class="header"></li>
						<li class="treeview">
							<a href="index.php">
								<i class="icon-home"></i>  <span>Inicio</span>
							</a>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="icon-box-add"></i>  <span>Registro General</span>
								<i class="icon-circle-down pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="icon-radio-unchecked"></i> Registrar Alumno </i></a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Registrar Representante</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Registrar Docente</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Inscribir Alumno</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Registrar Boletin</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<span class="icon-scissors"></span> <span>Modificar Registros</span>
								<i class="icon-circle-down pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="#"><i class="icon-radio-unchecked"></i> Datos Alumnos</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Datos Docentes</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Datos Boletin</a></li>
								<li><a href="#"><i class="icon-radio-unchecked"></i> Inscripción de Alumnos</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="icon-drawer"></span> <span>Reportes</span>
							</a>
						</li>
						<li>
							<a href="agregar_usuario.php">
								<span class="icon-key2"></span> <span>Administrador</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon-question"></span> <span>Ayuda</span>
							</a>
						</li>
					</ul>
				</section>
			</aside>
			<!--  Contenido -->
			<div class="content-wrapper">
				<section class="content-header">
					<h1>
					Registrar Usuario
					</h1>
				</section>
				<section class="content">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-danger">
								<div class="box-header">
									<a class="btn btn-success" href="registrar_usuario.php" role="button"><span class="icon-plus"></span>  Agregar</a>
								</div>
								<div class="box-body">
									<table class="table">
									<caption>Lista de Usuarios Registrados.</caption>
									<thead>
									<tr>
									<th>ID</th>
									<th>Cedula</th>
									<th>Usuario</th>
									<th>Contraseña</th>
									<th>Nombre y Apellido</th>
									<th>Perfil</th>
									<th colspan="2">Acciones</th>
									</tr>
									</thead>
									<tbody>
									<?php while ($row = mysql_fetch_array($result)){?>
									<tr>
									<td><?php echo $row['id_usuario'] ?></td>
									<td><?php echo $row['cedula_usuario'] ?></td>
									<td><?php echo $row['login_usuario'] ?></td>
									<td><?php echo $row['pass_usuario'] ?></td>
									<td><?php echo $row['nombre_usuario'] ?></td>
									<td><?php echo $row['descripcion_perfil'] ?></td>
									<td><a class="btn btn-warning" href="editar_usuario.php?usuario=<?php echo $row['id_usuario']?>" role="button" style="border-radius: 0;"><span class="icon-wrench"></span> Editar</a></td>
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
<?php
mysql_free_result($result);
mysql_close();
?>