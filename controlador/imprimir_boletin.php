<?php
include_once "validasesion.php";
include_once "../modelo/conexion.php";
require_once '../dompdf/dompdf_config.inc.php';
$id=$_GET['boletin'];

if(isset($_GET['boletin'])) 
{
$result_boletin_select=mysql_query("SELECT * FROM boletines a, alumnos b, ano_escolar c, docentes d, representantes e WHERE a.id_alumno=b.id_alumno AND a.id_representante=e.id_representante AND a.id_docente=d.id_docente AND a.ano_escolar=c.id_ano_escolar AND a.id_boletin=".$id."");
$row_boletin=mysql_fetch_array($result_boletin_select);
//$fec_nac_alumno=date_format($row_boletin['fecha_nac_alumno'], 'd-m-Y');
}
$html='
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style>
.page { page-break-before:always; }
</style>
<title>Ejemplo de Documento en PDF.</title>
</head>
<body>

<!-- Pagina 1 del PDF-->
<div class="page-first">

<table width=100%>
<tr>
<td width=15% valign="top"><img src="../vista/img/logo_escuela.png" alt="Mart&iacute;n Jos&eacute; Sanabria" height="125" width="125"></td>
<td width=70%><p align="center">
Rep&uacute;blica Bolivariana de Venezuela<br>
Ministerio del Poder Popular para la Educaci&oacute;n<br>
Unidad Educativa Integral Bolivariana<br>
"Mart&iacute;n Jos&eacute; Sanabria"<br>
Zona Educativa N&deg;1 / Distrito Capital<br>
Distrito Escolar N&deg;5 / Parroquia 23 de Enero<br>
C&oacute;digo DEA: 0D03570105<br>
Blog: martinjosesanabria.blogspot.com<br>
Telf. 0212-7416353<br>
Caracas - Venezuela<br>
</p></td>
<td width=15%></td>
<td></td>
</tr>
<tr>
<td><br style="line-height:150px" />&nbsp;</td>
</tr>
<tr>
<th colspan="3">
<p align="center" style="font-size:24px">
Bolet&iacute;n Informativo<br>
A&ntilde;o Escolar '.$row_boletin['ano_escolar'].'
</p>
</th>
</tr>
</table>
<table border="1" width="20%" align="center">
<tr>
<td><br style="line-height:120px" />&nbsp;</td>
</tr>
</table>
<p align="center">Foto</p>
<table width=100%>
<tr>
<td><br style="line-height:20px" />&nbsp;</td>
</tr>
<tr>
<th align="left" colspan="2">Estudiante:</th>
</tr>
<tr>
<th align="left">Nombres:</th><td>'.$row_boletin['nombres_alumno'].'</td>
<th align="left">Apellidos:</th><td>'.$row_boletin['apellidos_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Grado: </b>'.$row_boletin['grado'].' <b>Secci&oacute;n: </b>'.$row_boletin['seccion'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Edad: </b>'.$row_boletin['edad_alumno'].' <b>Sexo: </b>'.$row_boletin['sexo_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Lugar y Fecha de Nacimiento: </b>'.$row_boletin['lugar_nac_alumno'].' '.$row_boletin['fecha_nac_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Turno: </b>'.$row_boletin['turno_alumno'].'</td>
</tr>
<tr>
<td align="left" colspan="2"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
</tr>
<tr>
<td align="left"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
<td align="left"><b>C.I: </b>'.$row_boletin['ci_representante'].'</td>
</tr>
</table>

</div>
<!-- Fin Pagina 1 del PDF-->

<!-- Pagina 2 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="center">Rese&ntilde;a Historica</td>
</tr>
<tr>
<td align="center">Misi&oacute;n</td>
</tr>
<tr>
<td align="center">Visi&oacute;n</td>
</tr>
</table>

</div>
<!-- Fin Pagina 2 del PDF-->

<!-- Pagina 3 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="center"><b>I Momento Evaluativo</b><td>
</tr>
<tr>
<td align="center"><b>Diagn&oacute;stico</b><td>
</tr>
<tr>
<td align="center"><b>Desde: </b>'.$row_boletin['fecha_desde_momento1'].'<b> Hasta: </b>'.$row_boletin['fecha_hasta_momento1'].'<td>
</tr>
<tr>
<td align="center"><td>
</tr>
<tr>
<td align="left"><b>Observaciones Generales de la Actuaci&oacute;n del Estudiante: </b><td>
</tr>
<tr>
<td><p align="justify"><u>'.$row_boletin['observaciones_gen_momento1'].'</u></p><td>
</tr>
</table>

</div>
<!-- Fin Pagina 3 del PDF-->

<!-- Pagina 4 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="left" colspan="3"><b>Recomendaciones del Docente: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['recomendaciones_doc_momento1'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Estudiante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_alumno_momento1'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Representante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_rep_momento1'].'</u></p><td>
</tr>
</table>
<table width=100%>
<tr>
<td><b>D&iacute;as H&aacute;biles: </b>'.$row_boletin['dias_hab_momento1'].'</td>
<td><b>Asistencias: </b>'.$row_boletin['asistencias_momento1'].'</td>
<td><b>Inasistencias: </b>'.$row_boletin['inasistencias_momento1'].'</td>
</tr>
</table>
<table width=100%>
<tr>
<td colspan="3"><b>Fecha: </b>'.$row_boletin['fecha_momento1'].'</td
</tr>
<tr>
<td width=30% align="center">____________________________________</td>
<td></td>
<td width=30% align="center">____________________________________</td>
</tr>
<tr>
<td width=30% align="center"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
<td></td>
<td width=30% align="center"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
</tr>
</table>

</div>
<!-- Fin Pagina 4 del PDF-->

<!-- Pagina 5 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="center"><b>II Momento Evaluativo</b><td>
</tr>
<tr>
<td align="center"><b>Diagn&oacute;stico</b><td>
</tr>
<tr>
<td align="center"><b>Desde: </b>'.$row_boletin['fecha_desde_momento2'].'<b> Hasta: </b>'.$row_boletin['fecha_hasta_momento2'].'<td>
</tr>
<tr>
<td align="center"><td>
</tr>
<tr>
<td align="left"><b>Observaciones Generales de la Actuaci&oacute;n del Estudiante: </b><td>
</tr>
<tr>
<td><p align="justify"><u>'.$row_boletin['observaciones_gen_momento2'].'</u></p><td>
</tr>
</table>

</div>
<!-- Fin Pagina 5 del PDF-->

<!-- Pagina 6 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="left" colspan="3"><b>Recomendaciones del Docente: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['recomendaciones_doc_momento2'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Estudiante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_alumno_momento2'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Representante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_rep_momento2'].'</u></p><td>
</tr>
</table>
<table width=100%>
<tr>
<td><b>D&iacute;as H&aacute;biles: </b>'.$row_boletin['dias_hab_momento2'].'</td>
<td><b>Asistencias: </b>'.$row_boletin['asistencias_momento2'].'</td>
<td><b>Inasistencias: </b>'.$row_boletin['inasistencias_momento2'].'</td>
</tr>
</table>
<table width=100%>
<tr>
<td colspan="3"><b>Fecha: </b>'.$row_boletin['fecha_momento2'].'</td
</tr>
<tr>
<td width=30% align="center">____________________________________</td>
<td></td>
<td width=30% align="center">____________________________________</td>
</tr>
<tr>
<td width=30% align="center"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
<td></td>
<td width=30% align="center"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
</tr>
</table>

</div>
<!-- Fin Pagina 6 del PDF-->

<!-- Pagina 7 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="center"><b>III Momento Evaluativo</b><td>
</tr>
<tr>
<td align="center"><b>Diagn&oacute;stico</b><td>
</tr>
<tr>
<td align="center"><b>Desde: </b>'.$row_boletin['fecha_desde_momento3'].'<b> Hasta: </b>'.$row_boletin['fecha_hasta_momento3'].'<td>
</tr>
<tr>
<td align="center"><td>
</tr>
<tr>
<td align="left"><b>Observaciones Generales de la Actuaci&oacute;n del Estudiante: </b><td>
</tr>
<tr>
<td><p align="justify"><u>'.$row_boletin['observaciones_gen_momento3'].'</u></p><td>
</tr>
</table>

</div>
<!-- Fin Pagina 7 del PDF-->

<!-- Pagina 8 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="left" colspan="3"><b>Recomendaciones del Docente: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['recomendaciones_doc_momento3'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Estudiante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_alumno_momento3'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Representante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_rep_momento3'].'</u></p><td>
</tr>
</table>
<table width=100%>
<tr>
<td><b>D&iacute;as H&aacute;biles: </b>'.$row_boletin['dias_hab_momento3'].'</td>
<td><b>Asistencias: </b>'.$row_boletin['asistencias_momento3'].'</td>
<td><b>Inasistencias: </b>'.$row_boletin['inasistencias_momento3'].'</td>
</tr>
</table>
<table width=100%>
<tr>
<td colspan="3"><b>Fecha: </b>'.$row_boletin['fecha_momento3'].'</td
</tr>
<tr>
<td width=30% align="center">____________________________________</td>
<td></td>
<td width=30% align="center">____________________________________</td>
</tr>
<tr>
<td width=30% align="center"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
<td></td>
<td width=30% align="center"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
</tr>
</table>

</div>
<!-- Fin Pagina 8 del PDF-->

<!-- Pagina 9 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="center"><b>IV Momento Evaluativo</b><td>
</tr>
<tr>
<td align="center"><b>Diagn&oacute;stico</b><td>
</tr>
<tr>
<td align="center"><b>Desde: </b>'.$row_boletin['fecha_desde_momento4'].'<b> Hasta: </b>'.$row_boletin['fecha_hasta_momento4'].'<td>
</tr>
<tr>
<td align="center"><td>
</tr>
<tr>
<td align="left"><b>Observaciones Generales de la Actuaci&oacute;n del Estudiante: </b><td>
</tr>
<tr>
<td><p align="justify"><u>'.$row_boletin['observaciones_gen_momento4'].'</u></p><td>
</tr>
</table>

</div>
<!-- Fin Pagina 9 del PDF-->

<!-- Pagina 10 del PDF-->
<div class="page">

<table width=100%>
<tr>
<td align="left" colspan="3"><b>Recomendaciones del Docente: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['recomendaciones_doc_momento4'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Estudiante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_alumno_momento4'].'</u></p><td>
</tr>
<tr>
<td align="left" colspan="3"><b>Observaciones del Representante: </b><td>
</tr>
<tr>
<td colspan="3" height=25%><p align="justify"><u>'.$row_boletin['observaciones_rep_momento4'].'</u></p><td>
</tr>
</table>
<table width=100%>
<tr>
<td><b>D&iacute;as H&aacute;biles: </b>'.$row_boletin['dias_hab_momento4'].'</td>
<td><b>Asistencias: </b>'.$row_boletin['asistencias_momento4'].'</td>
<td><b>Inasistencias: </b>'.$row_boletin['inasistencias_momento4'].'</td>
</tr>
</table>
<table width=100%>
<tr>
<td colspan="3"><b>Fecha: </b>'.$row_boletin['fecha_momento4'].'</td
</tr>
<tr>
<td width=30% align="center">____________________________________</td>
<td></td>
<td width=30% align="center">____________________________________</td>
</tr>
<tr>
<td width=30% align="center"><b>Docente: </b>'.$row_boletin['nombre_docente'].'</td>
<td></td>
<td width=30% align="center"><b>Representante: </b>'.$row_boletin['nombre_representante'].'</td>
</tr>
</table>

</div>
<!-- Fin Pagina 10 del PDF-->
</body>
</html>';
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
$mipdf ->stream('FicheroEjemplo.pdf');
?>