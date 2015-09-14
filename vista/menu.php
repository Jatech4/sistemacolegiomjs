<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Admin - Martin J. Sanabria</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="font.css">
		<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<link href="css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
		<script src="js/sololetras.js"></script>
		<script src="js/solonumeros.js"></script>
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
											<a href="editar_usuario.php?usuario=<?php echo $_SESSION['id_usuario']?>" class="btn btn-default btn-flat"><span class="icon-user"></span> Perfil</a>
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
								<li><a href="agregar_alumno.php"><i class="icon-radio-unchecked"></i> Registrar Alumno </i></a></li>
								<li><a href="agregar_docente.php"><i class="icon-radio-unchecked"></i> Registrar Docente</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<span class="icon-drawer"></span> <span>Reportes</span>
								<i class="icon-circle-down pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="consultar_alumno.php"><i class="icon-radio-unchecked"></i> Generar Reporte Alumno </i></a></li>
								<li><a href="consultar_profesor.php"><i class="icon-radio-unchecked"></i> Generar Reporte Docente</a></li>
								<li><a href="crear_boletin.php"><i class="icon-radio-unchecked"></i> Generar Boletin</a></li>
								<li><a href="bitacora.php"><i class="icon-radio-unchecked"></i> Bitacora</a></li>
								<li><a href="lista_alumnos.php"><i class="icon-radio-unchecked"></i> Lista de Alumnos</a></li>
							</ul>
						</li>
						<?php if($_SESSION['perfilusuario']==1){ ?>
						<li class="treeview">
							<a href="">
								<span class="icon-key2"></span> <span>Administrador</span>
								<i class="icon-circle-down pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="agregar_usuario.php"><i class="icon-radio-unchecked"></i> Agregar Usuario</a></li>
								<li><a href="registrar_ano_escolar.php"><i class="icon-radio-unchecked"></i> Registrar Año Escolar</a></li>
							</ul>
						</li>
						<?php }?>
						<li>
							<a href="#">
								<span class="icon-question"></span> <span>Ayuda</span>
							</a>
						</li>
					</ul>
				</section>
			</aside>