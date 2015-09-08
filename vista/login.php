<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <title>Admin Martin J. Sanabria</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <ul class="list-inline">
          <li> <img src="img/logo_escuela2.png" height="170" width="220" alt="" class="img-responsive"></li>
          <li> <img src="img/logo_escuela.png" height="170" width="100" alt="" class="img-responsive"></li>
        </ul>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Inicia sesión para acceder</p>
        <form autocomplete="off" id="myform" action="../controlador/iniciosesion.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="usuario_id" id="usuario_id" autocomplete="off"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" autocomplete="off"/>
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
    <script>
        $(document).ready(function(){
        document.getElementById("myform").autocomplete = "off";
        });
    </script>
    <script src="js/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>