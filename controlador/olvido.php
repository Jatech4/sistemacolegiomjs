<?php
include_once "../modelo/conexion.php";
$cedula=$_POST['cedula'];
$sql="SELECT email_usuario, nombre_usuario, pass_usuario FROM usuarios WHERE cedula_usuario='$cedula'";
$result=mysql_query($sql);
$row = mysql_fetch_array($result);
$body='
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Olvido de Contraseña</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <h1>Buenas '.$row['nombre_usuario'].' </h1>
  <div align="center">
  </div>
  <p>Ha solicitado la recuperación de su contraseña del Sistema de Inscripcion del Colegio Martin J Sanabria.</p><br>
  <p>Su contraseña es: '.$row['pass_usuario'].'</p>
</div>
</body>
</html>
';
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');
require '../phpmailer/class.phpmailer.php';
require '../phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "matinjsanabria@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Victoria14";

//Set who the message is to be sent from
$mail->setFrom('matinjsanabria@example.com', 'Martin J Sanabria');

//Set an alternative reply-to address
$mail->addReplyTo('matinjsanabria@example.com', 'Martin J Sanabria');

//Set who the message is to be sent to
$mail->addAddress($row['email_usuario'],$row['nombre_usuario']);

//Set the subject line
$mail->Subject = 'Olvido de Contraseña';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);

//Replace the plain text body with one created manually
$mail->AltBody = 'Recuperacion de Contraseña';

//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo'<script type="text/javascript">
            alert("Contrase\u00f1a enviada, Verifique su correo");
            window.location="../vista/login.php"
         </script>';
}