<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";
$id_alumno=$_POST['id_alumno'];
$id_representante=$_POST['id_representante'];
$id_docente=$_POST['id_docente'];
$ano_escolar=$_POST['ano_escolar'];
$grado=$_POST['grado'];
$seccion=$_POST['seccion'];
$fecha_desde_momento1=$_POST['fecha_desde_momento1'];
$fecha_hasta_momento1=$_POST['fecha_hasta_momento1'];
$observaciones_gen_momento1=$_POST['observaciones_gen_momento1'];
$recomendaciones_doc_momento1=$_POST['recomendaciones_doc_momento1'];
$observaciones_alumno_momento1=$_POST['observaciones_alumno_momento1'];
$observaciones_rep_momento1=$_POST['observaciones_rep_momento1'];
$dias_hab_momento1=$_POST['dias_hab_momento1'];
$asistencias_momento1=$_POST['asistencias_momento1'];
$inasistencias_momento1=$_POST['inasistencias_momento1'];
$fecha_momento1=$_POST['fecha_momento1'];
$fecha_desde_momento2=$_POST['fecha_desde_momento2'];
$fecha_hasta_momento2=$_POST['fecha_hasta_momento2'];
$proyecto_momento2=$_POST['proyecto_momento2'];
$informe_glob_momento2=$_POST['informe_glob_momento2'];
$recomendaciones_doc_momento2=$_POST['recomendaciones_doc_momento2'];
$observaciones_alumno_momento2=$_POST['observaciones_alumno_momento2'];
$observaciones_rep_momento2=$_POST['observaciones_rep_momento2'];
$dias_hab_momento2=$_POST['dias_hab_momento2'];
$asistencias_momento2=$_POST['asistencias_momento2'];
$inasistencias_momento2=$_POST['inasistencias_momento2'];
$fecha_momento2=$_POST['fecha_momento2'];
$fecha_desde_momento3=$_POST['fecha_desde_momento3'];
$fecha_hasta_momento3=$_POST['fecha_hasta_momento3'];
$proyecto_momento3=$_POST['proyecto_momento3'];
$informe_glob_momento3=$_POST['informe_glob_momento3'];
$recomendaciones_doc_momento3=$_POST['recomendaciones_doc_momento3'];
$observaciones_alumno_momento3=$_POST['observaciones_alumno_momento3'];
$observaciones_rep_momento3=$_POST['observaciones_rep_momento3'];
$dias_hab_momento3=$_POST['dias_hab_momento3'];
$asistencias_momento3=$_POST['asistencias_momento3'];
$inasistencias_momento3=$_POST['inasistencias_momento3'];
$fecha_momento3=$_POST['fecha_momento3'];
$fecha_desde_momento4=$_POST['fecha_desde_momento4'];
$fecha_hasta_momento4=$_POST['fecha_hasta_momento4'];
$proyecto_momento4=$_POST['proyecto_momento4'];
$informe_glob_momento4=$_POST['informe_glob_momento4'];
$recomendaciones_doc_momento4=$_POST['recomendaciones_doc_momento4'];
$observaciones_alumno_momento4=$_POST['observaciones_alumno_momento4'];
$observaciones_rep_momento4=$_POST['observaciones_rep_momento4'];
$dias_hab_momento4=$_POST['dias_hab_momento4'];
$asistencias_momento4=$_POST['asistencias_momento4'];
$inasistencias_momento4=$_POST['inasistencias_momento4'];
$fecha_momento4=$_POST['fecha_momento4'];

$result = mysql_query("INSERT INTO boletines(id_alumno, id_representante, id_docente, ano_escolar, grado, seccion, fecha_desde_momento1, fecha_hasta_momento1, observaciones_gen_momento1, recomendaciones_doc_momento1, observaciones_alumno_momento1, observaciones_rep_momento1, dias_hab_momento1, asistencias_momento1, inasistencias_momento1, fecha_momento1, fecha_desde_momento2, fecha_hasta_momento2, proyecto_momento2, informe_glob_momento2, recomendaciones_doc_momento2, observaciones_alumno_momento2, observaciones_rep_momento2, dias_hab_momento2, asistencias_momento2, inasistencias_momento2, fecha_momento2, fecha_desde_momento3, fecha_hasta_momento3, proyecto_momento3, informe_glob_momento3, recomendaciones_doc_momento3, observaciones_alumno_momento3, observaciones_rep_momento3, dias_hab_momento3, asistencias_momento3, inasistencias_momento3, fecha_momento3, fecha_desde_momento4, fecha_hasta_momento4, proyecto_momento4, informe_glob_momento4, recomendaciones_doc_momento4, observaciones_alumno_momento4, observaciones_rep_momento4, dias_hab_momento4, asistencias_momento4, inasistencias_momento4, fecha_momento4)
						    VALUES ('$id_alumno','$id_representante','$id_docente','$ano_escolar','$grado','$seccion','$fecha_desde_momento1','$fecha_hasta_momento1','$observaciones_gen_momento1','$recomendaciones_doc_momento1','$observaciones_alumno_momento1','$observaciones_rep_momento1','$dias_hab_momento1','$asistencias_momento1','$inasistencias_momento1','$fecha_momento1','$fecha_desde_momento2','$fecha_hasta_momento2','$proyecto_momento2','$informe_glob_momento2','$recomendaciones_doc_momento2','$observaciones_alumno_momento2','$observaciones_rep_momento2','$dias_hab_momento2','$asistencias_momento2','$inasistencias_momento2','$fecha_momento2','$fecha_desde_momento3','$fecha_hasta_momento3','$proyecto_momento3','$informe_glob_momento3','$recomendaciones_doc_momento3','$observaciones_alumno_momento3','$observaciones_rep_momento3','$dias_hab_momento3','$asistencias_momento3','$inasistencias_momento3','$fecha_momento3','$fecha_desde_momento4','$fecha_hasta_momento4','$proyecto_momento4','$informe_glob_momento4','$recomendaciones_doc_momento4','$observaciones_alumno_momento4','$observaciones_rep_momento4','$dias_hab_momento4','$asistencias_momento4','$inasistencias_momento4','$fecha_momento4')");
echo mysql_error();
mysql_close();
?>
 <script languaje="javascript">
  alert("\u00A1Boletin Registrado\u0021");
  location.href = "../vista/crear_boletin.php";
 </script>