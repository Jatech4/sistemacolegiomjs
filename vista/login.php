<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin Martin J. Sanabria</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo text-center">
        <img src="img/logo_escuela.png" height="170" width="154" alt="" class="img-responsive" style="margin-left: auto;
    margin-right: auto;">
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Inicia sesión para acceder</p>

        <form action="../controlador/iniciosesion.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario_id" id="usuario_id" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
            </div>
          </div>
        </form>

      </div>
    </div>
    <script src="js/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>