<?php
include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once '../dompdf/dompdf_config.inc.php';
$sql=$_POST['consulta'];

$result=mysql_query($sql);

$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
.page { page-break-before:always; }
</style>
<title>Reporte</title>
</head>
<body>
<p align="center" style="font-size:24px">
Reporte de Docentes<br>
</p>
<table width=100%>
<tr>
<th>ID</th>
<th>Nombres</th>
<th>Cedula</th>
</tr>';
while ($row = mysql_fetch_array($result)){
$html.='
<tr>
<td align="center">'.$row['id_docente'].'</td>
<td align="center">'.$row['nombre_docente'].'</td>
<td align="center">'.$row['ci_docente'].'</td>
</tr>
';}
$html.='
</table>
</body>
</html>';
$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("letter", "portrait");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('Reporte Docentes.pdf');
?>