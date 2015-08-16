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
<td align="center"><b>Rese&ntilde;a Historica</b></td>
</tr>
<tr>
<td align="center"><p align="justify">

     &nbsp; &nbsp; &nbsp; &nbsp;La Escuela "MART&Iacute;N JOS&Eacute; SANABRIA" fue inaugurada el 7 de enero de 1930 con el nombre de "ARTURO MICHELENA" en una peque&ntilde;a casa situada en Monte Piedad.
<br><br>
	&nbsp; &nbsp; &nbsp; &nbsp;En 1932 se logra la construcci&oacuten de un peque&ntilde;o local en la calle Colombia y para la inauguraci&oacte;n el Ministerio de Educaci&oacute;n cambia el nombre de la escuela por el que actualmente tiene de acuerdo con la solicitud efectuada por la directora tomando en cuenta la importancia que tuvo este personaje bajo la presencia de Guzm&aacute;n Blanco en la instrucci&oacute;n del pueblo venezolano.
<br><br>
	&nbsp; &nbsp; &nbsp; &nbsp;Nuestra insigne instituci&oacute;n lleva el nombre del Doctor "Mart&iacute;n Jos&eacute; Sanabria" quien naci&oacute; en Caracas el 15 de agosto de 1831 y falleci&oacute; en la misma ciudad lleno de m&eacute;ritos y grandezas en el a&ntilde;o 1904. Por su actuaci&oacute;n relevante dentro del campo de la ense&ntilde;anza, el Doctor Mart&iacute;n Jos&eacute; Sanabria ha merecido el nombre del Ap&oacute;stol de la Educaci&oacute;n Venezolana, a el se debe la elaboraci&oacute;n del decreto sobre la ense&ntilde;anza gratuita y obligatoria, promulgado por el General Antonio Guzm&aacute;n Blanco el 27 de junio de 1870.
<br><br>
	&nbsp; &nbsp; &nbsp; &nbsp;A comienzos de 1965 por a&ntilde;o y medio es transferida a los m&oacute;dulos ubicados entre los bloques 5 y 6 del 23 de enero, donde actualmente funciona la escuela "Diego de Lozada" mientras era construido por el Ministerio de Obras P&uacute;blicas (M.O.P) el nuevo local de tres niveles que ahora existe.
<br><br>
	&nbsp; &nbsp; &nbsp; &nbsp;La escuela fue reinaugurada el 21 de junio de 1966 contando con la presencia de la Directora Fundadora Lola Caruja. M&aacute;s reciente en 2001 el plantel fue incorporado al proyecto de Escuelas Bolivarianas, se imparte Educaci&oacute;n Inicial y Primaria, especialidades como Folklore, M&uacute;sica y Psicopedagog&iacute;a. A partir del a&ntilde;o 2009 cuenta con el Centro de Inform&aacute;tica y Telem&aacute;tica (CBIT) donde los estudiantes mediante el uso de las Tecnolog&iacute;as de Informaci&oacute;n, y Comunicaci&oacute;n (Las TIC) refuerzan los contenidos impartidos en clase.
<br><br>
	&nbsp; &nbsp; &nbsp; &nbsp;Actualmente con sus 82 a&ntilde;os de fundada la escuela atiende a una poblaci&oacute;n de mas de 526 alumnos teniendo un horario integral de 7:30am a 3:30pm.
 </p></td>
</tr>
<tr>
<td align="center"><b>Misi&oacute;n</b></td>
</tr>
<tr>
<td align="center"><p align="justify">
 &nbsp; &nbsp; &nbsp; &nbsp;La U.E.N.I.B. Mart&iacute;n Jos&eacute; Sanabria tiene como misi&oacute;n ofrecer una educaci&oacute;n de calidad que contribuya a la formaci&oacute;n integral de nuestros estudiantes, promoviendo, orientando y generando en forma continua a un conjunto de acciones, experiencias y actividades pedag&oacute;gicas dirigidas a la integraci&oacute;n de todos los actores del hecho educativo, permitiendo as&iacute; el desarrollo pluridimensional de todas las potencialidades del educando y el logro en la adquisici&oacute;n de nuevos conocimientos, el desarrollo de valores humanos para un aprendizaje significativo y productivo al servicio de su comunidad y la sociedad.</p></td>
</tr>
<tr>
<td align="center"><b>Visi&oacute;n</b></td>
</tr>
<tr>
<td align="center"><p align="justify">
&nbsp; &nbsp; &nbsp; &nbsp;La U.E.N.I.B. Mart&iacute;n Jos&eacute; Sanabria tiene como visi&oacute;n ser una Instituci&oacute;n Educativa, que busque permanentemente la excelencia en la formaci&oacute;n integral del ser humano con base en los principios Bolivarianos y comprometidos con los valores de la justicia, equidad, respeto, responsabilidad, solidaridad y libertad como bases fundamentales en el desarrollo del estudiante como ser social.
</p></td>
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
$mipdf ->stream('Boletin.pdf');
?>