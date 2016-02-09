<?php
include_once "../controlador/validasesion.php";
include_once "../modelo/conexion.php";

$id=$_POST['id'];
//Datos¨Personales del Alumno
$nombres_alumno=$_POST['nombres_alumno'];
$apellidos_alumno=$_POST['apellidos_alumno'];
$cedula_alumno=$_POST['cedula_alumno'];
$cedula_propia=$_POST['cedula_propia'];
$edad_alumno=$_POST['edad_alumno'];
$sexo_alumno=$_POST['sexo_alumno'];
$lugar_nac_alumno=$_POST['lugar_nac_alumno'];
$fecha_nac_alumno=$_POST['fecha_nac_alumno'];
$direccion_alumno=$_POST['direccion_alumno'];
$tlf1_alumno=$_POST['tlf1_alumno'];
$tlf2_alumno=$_POST['tlf2_alumno'];
$tlf3_alumno=$_POST['tlf3_alumno'];

$sql="UPDATE alumnos SET cedula_alumno='$cedula_alumno',cedula_propia='$cedula_propia',nombres_alumno='$nombres_alumno',apellidos_alumno='$apellidos_alumno',edad_alumno='$edad_alumno',sexo_alumno='$sexo_alumno',lugar_nac_alumno='$lugar_nac_alumno',fecha_nac_alumno='$fecha_nac_alumno',direccion_alumno='$direccion_alumno',tlf1_alumno='$tlf1_alumno',tlf2_alumno='$tlf2_alumno',tlf3_alumno='$tlf3_alumno' WHERE id_alumno=$id";
$result = mysql_query($sql);
echo mysql_error();

//Datos Procedencia
$plantel_procedencia=$_POST['plantel_procedencia'];
$ultimo_grado=$_POST['ultimo_grado'];
$aprobado=$_POST['aprobado'];

$sql="UPDATE procedencia_alumno SET plantel_procedencia='$plantel_procedencia',ultimo_grado='$ultimo_grado',aprobado='$aprobado' WHERE id_alumno=$id";
$result = mysql_query($sql);
echo mysql_error();

//Documentos Presentados
$carta_conducta=$_POST['carta_conducta'];
$boleta_promocion=$_POST['boleta_promocion'];
$fotos_alumno=$_POST['fotos_alumno'];
$fotos_representante=$_POST['fotos_representante'];
$ci_representante=$_POST['ci_representante'];
$partida_nacimiento=$_POST['partida_nacimiento'];

$sql="UPDATE documentos_presentados SET boleta_promocion='$boleta_promocion',carta_conducta='$carta_conducta',fotos_alumno='$fotos_alumno',fotos_representante='$fotos_representante',ci_representante='$ci_representante',partida_nacimiento='$partida_nacimiento' WHERE id_alumno=$id";
$result = mysql_query($sql);
echo mysql_error();

//Situacion Economica
$tipo_vivienda=$_POST['tipo_vivienda'];
$condicion_vivienda=$_POST['condicion_vivienda'];
$personas_vivienda=$_POST['personas_vivienda'];
$abuelos_vivienda=$_POST['abuelos_vivienda'];
$ingreso_vivienda=$_POST['ingreso_vivienda'];
$cantidad_hermanas=$_POST['cantidad_hermanas'];
$cantidad_hermanos=$_POST['cantidad_hermanos'];
$lugar_ocu_alumno=$_POST['lugar_ocu_alumno'];
$estudian_hermanos=$_POST['estudian_hermanos'];

$sql="UPDATE situacion_economica SET tipo_vivienda='$tipo_vivienda',condicion_vivienda='$condicion_vivienda',personas_vivienda='$personas_vivienda',abuelos_vivienda='$abuelos_vivienda',ingreso_vivienda='$ingreso_vivienda',cantidad_hermanas='$cantidad_hermanas',cantidad_hermanos='$cantidad_hermanos',lugar_hermanos='$lugar_ocu_alumno',estudian_hermanos='$estudian_hermanos' WHERE id_alumno=$id";
$result = mysql_query($sql);
echo mysql_error();

//Aspectos de Salud del Alumno
$vacuna_triple=$_POST['vacuna_triple'];
$vacuna_bcg=$_POST['vacuna_bcg'];
$vacuna_polio=$_POST['vacuna_polio'];
$vacuna_hepab=$_POST['vacuna_hepab'];
$vacuna_meningitis=$_POST['vacuna_meningitis'];
$asmatico=$_POST['asmatico'];
$diabetico=$_POST['diabetico'];
$alergico=$_POST['alergico'];
$observacion_alergia=$_POST['observacion_alergia'];
$control_medico=$_POST['control_medico'];
$observacion_control=$_POST['observacion_control'];
$suministro_fiebre=$_POST['suministro_fiebre'];
$tipo_dificultad=$_POST['tipo_dificultad'];
$operacion=$_POST['operacion'];
$psicologo=$_POST['psicologo'];
$psicopedagogo=$_POST['psicopedagogo'];
$observaciones_psicopedagogo=$_POST['observaciones_psicopedagogo'];
$impedimento_fisico=$_POST['impedimento_fisico'];
$observacion_impedimento=$_POST['observacion_impedimento'];

$sql="UPDATE salud_alumno SET vacuna_triple='$vacuna_triple',vacuna_bcg='$vacuna_bcg',vacuna_polio='$vacuna_polio',vacuna_hepab='$vacuna_hepab',vacuna_meningitis='$vacuna_meningitis',asmatico='$asmatico',diabetico='$diabetico',alergico='$alergico',observacion_alergia='$observacion_alergia',control_medico='$control_medico',observacion_control='$observacion_control',suministro_fiebre='$suministro_fiebre',tipo_dificultad='$tipo_dificultad',operacion='$operacion',psicologo='$psicologo',psicopedagogo='$psicopedagogo',observaciones_psicopedagogo='$observaciones_psicopedagogo',impedimento_fisico='$impedimento_fisico',observacion_impedimento='$observacion_impedimento' WHERE id_alumno=$id";
$result = mysql_query($sql);
echo mysql_error();
mysql_close();

?>
 <script languaje="javascript">
  alert("\u00A1Alumno Modificado\u0021");
  location.href = "../vista/agregar_alumno.php";
 </script>