SET FOREIGN_KEY_CHECKS = 0;

-- 
-- Table structure for table `alumnos` 
-- 

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
`id_alumno` int(11) NOT NULL auto_increment,
`cedula_alumno` varchar(10) NOT NULL,
`nombres_alumno` varchar(50) NOT NULL,
`apellidos_alumno` varchar(50) NOT NULL,
`edad_alumno` varchar(2) NOT NULL,
`sexo_alumno` varchar(1) NOT NULL,
`lugar_nac_alumno` varchar(50) NOT NULL,
`fecha_nac_alumno` date NOT NULL,
`direccion_alumno` varchar(255) NOT NULL,
`tlf1_alumno` varchar(15) NOT NULL,
`tlf2_alumno` varchar(15) NOT NULL,
`tlf3_alumno` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_alumno`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `ano_escolar` 
-- 

DROP TABLE IF EXISTS `ano_escolar`;
CREATE TABLE `ano_escolar` (
`id_ano_escolar` int(11) NOT NULL auto_increment,
`ano_escolar` varchar(9) NOT NULL,
  PRIMARY KEY  (`id_ano_escolar`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

-- --------------------------------------------------------

-- 
-- Table structure for table `bitacora` 
-- 

DROP TABLE IF EXISTS `bitacora`;
CREATE TABLE `bitacora` (
`id_bitacora` int(11) NOT NULL auto_increment,
`id_usuario` int(11) NOT NULL,
`fecha` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_bitacora`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=37;

-- --------------------------------------------------------

-- 
-- Table structure for table `boletines` 
-- 

DROP TABLE IF EXISTS `boletines`;
CREATE TABLE `boletines` (
`id_boletin` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`id_representante` int(11) NOT NULL,
`id_docente` int(11) NOT NULL,
`ano_escolar` int(11) NOT NULL,
`grado` varchar(3) NOT NULL,
`seccion` varchar(3) NOT NULL,
`fecha_desde_momento1` date NOT NULL,
`fecha_hasta_momento1` date NOT NULL,
`observaciones_gen_momento1` text NOT NULL,
`recomendaciones_doc_momento1` text NOT NULL,
`observaciones_alumno_momento1` text NOT NULL,
`observaciones_rep_momento1` text NOT NULL,
`dias_hab_momento1` varchar(3) NOT NULL,
`asistencias_momento1` varchar(3) NOT NULL,
`inasistencias_momento1` varchar(3) NOT NULL,
`fecha_momento1` date NOT NULL,
`fecha_desde_momento2` date NOT NULL,
`fecha_hasta_momento2` date NOT NULL,
`proyecto_momento2` text NOT NULL,
`informe_glob_momento2` text NOT NULL,
`recomendaciones_doc_momento2` text NOT NULL,
`observaciones_alumno_momento2` text NOT NULL,
`observaciones_rep_momento2` text NOT NULL,
`dias_hab_momento2` varchar(3) NOT NULL,
`asistencias_momento2` varchar(3) NOT NULL,
`inasistencias_momento2` varchar(3) NOT NULL,
`fecha_momento2` date NOT NULL,
`fecha_desde_momento3` date NOT NULL,
`fecha_hasta_momento3` date NOT NULL,
`proyecto_momento3` text NOT NULL,
`informe_glob_momento3` text NOT NULL,
`recomendaciones_doc_momento3` text NOT NULL,
`observaciones_alumno_momento3` text NOT NULL,
`observaciones_rep_momento3` text NOT NULL,
`dias_hab_momento3` varchar(3) NOT NULL,
`asistencias_momento3` varchar(3) NOT NULL,
`inasistencias_momento3` varchar(3) NOT NULL,
`fecha_momento3` date NOT NULL,
`fecha_desde_momento4` date NOT NULL,
`fecha_hasta_momento4` date NOT NULL,
`proyecto_momento4` text NOT NULL,
`informe_glob_momento4` text NOT NULL,
`recomendaciones_doc_momento4` text NOT NULL,
`observaciones_alumno_momento4` text NOT NULL,
`observaciones_rep_momento4` text NOT NULL,
`dias_hab_momento4` varchar(3) NOT NULL,
`asistencias_momento4` varchar(3) NOT NULL,
`inasistencias_momento4` varchar(3) NOT NULL,
`fecha_momento4` date NOT NULL,
`literal` varchar(10) NOT NULL,
`expresa` text NOT NULL,
`promovido` varchar(2) NOT NULL,
`grado_superior` varchar(10) NOT NULL,
`nota_momento1` varchar(1) NOT NULL,
`nota_momento2` varchar(1) NOT NULL,
`nota_momento3` varchar(1) NOT NULL,
`nota_momento4` varchar(1) NOT NULL,
  PRIMARY KEY  (`id_boletin`),
  KEY `id_boletin` (`id_boletin`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_docente` (`id_docente`),
  KEY `id_alumno_boletin` (`id_alumno`),
  KEY `id_docente_boletin` (`id_docente`),
  KEY `id_representante` (`id_representante`),
  KEY `ano_escolar` (`ano_escolar`)
) ENGINE=InnoDB AUTO_INCREMENT=10;

-- --------------------------------------------------------

-- 
-- Table structure for table `canaimas` 
-- 

DROP TABLE IF EXISTS `canaimas`;
CREATE TABLE `canaimas` (
`id_canaima` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`serial_canaima` varchar(100) NOT NULL,
`modelo_canaima` int(11) NOT NULL,
  PRIMARY KEY  (`id_canaima`),
  KEY `id_alumno` (`id_alumno`),
  KEY `modelo_canaima` (`modelo_canaima`)
) ENGINE=InnoDB AUTO_INCREMENT=5;

-- --------------------------------------------------------

-- 
-- Table structure for table `docentes` 
-- 

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE `docentes` (
`id_docente` int(11) NOT NULL auto_increment,
`ci_docente` varchar(10) NOT NULL,
`nombre_docente` varchar(50) NOT NULL,
`correo_docente` varchar(25) NOT NULL,
`tlfn_docente` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_docente`),
  KEY `id_docente` (`id_docente`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `documentos_presentados` 
-- 

DROP TABLE IF EXISTS `documentos_presentados`;
CREATE TABLE `documentos_presentados` (
`id_doc_presentados` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`boleta_promocion` varchar(2) NOT NULL,
`carta_conducta` varchar(2) NOT NULL,
`fotos_alumno` varchar(2) NOT NULL,
`fotos_representante` varchar(2) NOT NULL,
`ci_representante` varchar(2) NOT NULL,
`partida_nacimiento` varchar(2) NOT NULL,
  PRIMARY KEY  (`id_doc_presentados`),
  KEY `id_doc_presentados` (`id_doc_presentados`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `modelos_canaimas` 
-- 

DROP TABLE IF EXISTS `modelos_canaimas`;
CREATE TABLE `modelos_canaimas` (
`id_modelo` int(11) NOT NULL auto_increment,
`serial_modelo` varchar(100) NOT NULL,
`nombre_modelo` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

-- --------------------------------------------------------

-- 
-- Table structure for table `perfil_usuario` 
-- 

DROP TABLE IF EXISTS `perfil_usuario`;
CREATE TABLE `perfil_usuario` (
`id_perfil` int(1) NOT NULL,
`descripcion_perfil` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_perfil`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `procedencia_alumno` 
-- 

DROP TABLE IF EXISTS `procedencia_alumno`;
CREATE TABLE `procedencia_alumno` (
`id_procedencia` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`plantel_procedencia` varchar(50) NOT NULL,
`ultimo_grado` varchar(15) NOT NULL,
`aprobado` varchar(2) NOT NULL,
  PRIMARY KEY  (`id_procedencia`),
  KEY `id_procedencia` (`id_procedencia`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `representantes` 
-- 

DROP TABLE IF EXISTS `representantes`;
CREATE TABLE `representantes` (
`id_representante` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`tipo_representante` varchar(20) NOT NULL,
`nombre_representante` varchar(50) NOT NULL,
`ci_representante` varchar(10) NOT NULL,
`nacionalidad_representante` varchar(20) NOT NULL,
`edad_representante` varchar(3) NOT NULL,
`tlfn1_representante` varchar(15) NOT NULL,
`tlfn2_representante` varchar(15) NOT NULL,
`ocupacion_representante` varchar(50) NOT NULL,
`lugar_trabajo_representante` varchar(50) NOT NULL,
`tlfn_lugar_trabajo_representante` varchar(15) NOT NULL,
`sueldo_representante` varchar(20) NOT NULL,
`vive_con_alumno` varchar(2) NOT NULL,
`observacion_vive_con_alumno` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_representante`),
  KEY `id_representante` (`id_representante`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `salud_alumno` 
-- 

DROP TABLE IF EXISTS `salud_alumno`;
CREATE TABLE `salud_alumno` (
`id_salud` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`vacuna_triple` varchar(2) NOT NULL,
`vacuna_bcg` varchar(2) NOT NULL,
`vacuna_polio` varchar(2) NOT NULL,
`vacuna_hepab` varchar(2) NOT NULL,
`vacuna_meningitis` varchar(2) NOT NULL,
`asmatico` varchar(2) NOT NULL,
`diabetico` varchar(2) NOT NULL,
`alergico` varchar(2) NOT NULL,
`observacion_alergia` varchar(50) NOT NULL,
`control_medico` varchar(2) NOT NULL,
`observacion_control` varchar(50) NOT NULL,
`suministro_fiebre` varchar(50) NOT NULL,
`tipo_dificultad` varchar(15) NOT NULL,
`operacion` varchar(2) NOT NULL,
`psicologo` varchar(2) NOT NULL,
`psicopedagogo` varchar(2) NOT NULL,
`observaciones_psicopedagogo` varchar(50) NOT NULL,
`impedimento_fisico` varchar(2) NOT NULL,
`observacion_impedimento` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_salud`),
  KEY `id_salud` (`id_salud`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `situacion_economica` 
-- 

DROP TABLE IF EXISTS `situacion_economica`;
CREATE TABLE `situacion_economica` (
`id_situacion` int(11) NOT NULL auto_increment,
`id_alumno` int(11) NOT NULL,
`tipo_vivienda` varchar(20) NOT NULL,
`condicion_vivienda` varchar(20) NOT NULL,
`personas_vivienda` int(2) NOT NULL,
`abuelos_vivienda` int(1) NOT NULL,
`ingreso_vivienda` varchar(10) NOT NULL,
`cantidad_hermanas` int(1) NOT NULL,
`cantidad_hermanos` int(1) NOT NULL,
`lugar_hermanos` varchar(20) NOT NULL,
`estudian_hermanos` varchar(2) NOT NULL,
  PRIMARY KEY  (`id_situacion`),
  KEY `id_situacion` (`id_situacion`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=3;

-- --------------------------------------------------------

-- 
-- Table structure for table `status_usuario` 
-- 

DROP TABLE IF EXISTS `status_usuario`;
CREATE TABLE `status_usuario` (
`id_status` int(1) NOT NULL,
`descripcion_status` varchar(15) NOT NULL,
  PRIMARY KEY  (`id_status`)
) ENGINE=InnoDB;

-- --------------------------------------------------------

-- 
-- Table structure for table `usuarios` 
-- 

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`id_usuario` int(11) NOT NULL auto_increment,
`cedula_usuario` varchar(10) NOT NULL,
`nombre_usuario` varchar(50) NOT NULL,
`login_usuario` varchar(15) NOT NULL,
`pass_usuario` varchar(15) NOT NULL,
`status_usuario` int(1) NOT NULL,
`perfil_usuario` int(1) NOT NULL,
`email_usuario` varchar(50) NOT NULL,
  PRIMARY KEY  (`id_usuario`),
  KEY `id_usuario` (`id_usuario`),
  KEY `perfil_usuario` (`perfil_usuario`),
  KEY `status_usuario` (`status_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2;

-- --------------------------------------------------------

-- 
-- Dumping data for table `alumnos` 
-- 

INSERT INTO `alumnos` (`id_alumno`, `cedula_alumno`, `nombres_alumno`, `apellidos_alumno`, `edad_alumno`, `sexo_alumno`, `lugar_nac_alumno`, `fecha_nac_alumno`, `direccion_alumno`, `tlf1_alumno`, `tlf2_alumno`, `tlf3_alumno`) VALUES ('1','18677970','Junior','Ayala','','M','caracas','1988-03-31','montalban','02124714490','',''),
 ('2','4234234','wer','qwer','','M','qwer','2015-11-27','qwerqwer','02124714490','','');

-- --------------------------------------------------------

-- 
-- Dumping data for table `ano_escolar` 
-- 

INSERT INTO `ano_escolar` (`id_ano_escolar`, `ano_escolar`) VALUES ('1','2016-2017');

-- --------------------------------------------------------

-- 
-- Dumping data for table `bitacora` 
-- 

INSERT INTO `bitacora` (`id_bitacora`, `id_usuario`, `fecha`) VALUES ('1','1','31-10-2015 06:44:19'),
 ('2','1','31-10-2015 06:45:35'),
 ('3','1','31-10-2015 06:46:09'),
 ('4','1','31-10-2015 06:46:45'),
 ('5','1','31-10-2015 08:34:40'),
 ('6','1','01-11-2015 02:43:40'),
 ('7','1','01-11-2015 17:18:08'),
 ('8','1','01-11-2015 17:19:08'),
 ('9','1','01-11-2015 17:30:20'),
 ('10','1','01-11-2015 18:05:49'),
 ('11','1','01-11-2015 18:10:18'),
 ('12','1','01-11-2015 18:10:53'),
 ('13','1','01-11-2015 18:12:47'),
 ('14','1','01-11-2015 18:17:28'),
 ('15','1','01-11-2015 18:20:05'),
 ('16','1','01-11-2015 18:44:06'),
 ('17','1','01-11-2015 18:44:16'),
 ('18','1','01-11-2015 19:44:07'),
 ('19','1','01-11-2015 20:14:42'),
 ('20','1','01-11-2015 20:46:15'),
 ('21','1','01-11-2015 21:40:47'),
 ('22','1','02-11-2015 20:32:09'),
 ('23','1','04-11-2015 19:44:57'),
 ('24','1','04-11-2015 20:23:04'),
 ('25','1','04-11-2015 20:45:41'),
 ('26','1','24-11-2015 01:42:28'),
 ('27','1','01-12-2015 14:25:43'),
 ('28','1','01-12-2015 13:31:49'),
 ('29','1','01-12-2015 13:48:50'),
 ('30','1','01-12-2015 14:28:37'),
 ('31','1','01-12-2015 14:30:38'),
 ('32','1','01-12-2015 14:57:10'),
 ('33','1','01-12-2015 17:44:02'),
 ('34','1','01-12-2015 18:34:15'),
 ('35','1','03-12-2015 13:33:48'),
 ('36','1','09-12-2015 17:04:42');

-- --------------------------------------------------------

-- 
-- Dumping data for table `boletines` 
-- 

INSERT INTO `boletines` (`id_boletin`, `id_alumno`, `id_representante`, `id_docente`, `ano_escolar`, `grado`, `seccion`, `fecha_desde_momento1`, `fecha_hasta_momento1`, `observaciones_gen_momento1`, `recomendaciones_doc_momento1`, `observaciones_alumno_momento1`, `observaciones_rep_momento1`, `dias_hab_momento1`, `asistencias_momento1`, `inasistencias_momento1`, `fecha_momento1`, `fecha_desde_momento2`, `fecha_hasta_momento2`, `proyecto_momento2`, `informe_glob_momento2`, `recomendaciones_doc_momento2`, `observaciones_alumno_momento2`, `observaciones_rep_momento2`, `dias_hab_momento2`, `asistencias_momento2`, `inasistencias_momento2`, `fecha_momento2`, `fecha_desde_momento3`, `fecha_hasta_momento3`, `proyecto_momento3`, `informe_glob_momento3`, `recomendaciones_doc_momento3`, `observaciones_alumno_momento3`, `observaciones_rep_momento3`, `dias_hab_momento3`, `asistencias_momento3`, `inasistencias_momento3`, `fecha_momento3`, `fecha_desde_momento4`, `fecha_hasta_momento4`, `proyecto_momento4`, `informe_glob_momento4`, `recomendaciones_doc_momento4`, `observaciones_alumno_momento4`, `observaciones_rep_momento4`, `dias_hab_momento4`, `asistencias_momento4`, `inasistencias_momento4`, `fecha_momento4`, `literal`, `expresa`, `promovido`, `grado_superior`, `nota_momento1`, `nota_momento2`, `nota_momento3`, `nota_momento4`) VALUES ('8','1','1','1','1','2do','B','2015-11-01','2015-11-04','','','','','12','10','5','0000-00-00','2015-11-03','2015-11-27','','','','','','','10','5','2015-11-02','2015-11-25','2015-11-30','','','','','','','10','5','0000-00-00','2015-11-01','2015-11-04','','','','','','','10','5','0000-00-00','','','','','','','',''),
 ('9','2','2','1','1','2do','A','0000-00-00','0000-00-00','','','','','','5','5','0000-00-00','0000-00-00','0000-00-00','','','','','','','5','5','0000-00-00','0000-00-00','0000-00-00','','','','','','','5','5','0000-00-00','0000-00-00','0000-00-00','','','','','','','5','5','0000-00-00','','','','','','','','');

-- --------------------------------------------------------

-- 
-- Dumping data for table `canaimas` 
-- 

INSERT INTO `canaimas` (`id_canaima`, `id_alumno`, `serial_canaima`, `modelo_canaima`) VALUES ('1','1','123456abcd','1'),
 ('4','2','23423424werw','1');

-- --------------------------------------------------------

-- 
-- Dumping data for table `docentes` 
-- 

INSERT INTO `docentes` (`id_docente`, `ci_docente`, `nombre_docente`, `correo_docente`, `tlfn_docente`) VALUES ('1','1235646','Noel Sanchez','','0212366412'),
 ('2','234','et','','345');

-- --------------------------------------------------------

-- 
-- Dumping data for table `documentos_presentados` 
-- 

INSERT INTO `documentos_presentados` (`id_doc_presentados`, `id_alumno`, `boleta_promocion`, `carta_conducta`, `fotos_alumno`, `fotos_representante`, `ci_representante`, `partida_nacimiento`) VALUES ('1','1','Si','Si','No','Si','Si','No'),
 ('2','2','Si','Si','','','No','');

-- --------------------------------------------------------

-- 
-- Dumping data for table `modelos_canaimas` 
-- 

INSERT INTO `modelos_canaimas` (`id_modelo`, `serial_modelo`, `nombre_modelo`) VALUES ('1','MGEDMG3VZCH03C','Canaima 3');

-- --------------------------------------------------------

-- 
-- Dumping data for table `perfil_usuario` 
-- 

INSERT INTO `perfil_usuario` (`id_perfil`, `descripcion_perfil`) VALUES ('1','Administrador'),
 ('2','Profesor');

-- --------------------------------------------------------

-- 
-- Dumping data for table `procedencia_alumno` 
-- 

INSERT INTO `procedencia_alumno` (`id_procedencia`, `id_alumno`, `plantel_procedencia`, `ultimo_grado`, `aprobado`) VALUES ('1','1','San Agustin','7mo','Si'),
 ('2','2','San Agustin','7mo','No');

-- --------------------------------------------------------

-- 
-- Dumping data for table `representantes` 
-- 

INSERT INTO `representantes` (`id_representante`, `id_alumno`, `tipo_representante`, `nombre_representante`, `ci_representante`, `nacionalidad_representante`, `edad_representante`, `tlfn1_representante`, `tlfn2_representante`, `ocupacion_representante`, `lugar_trabajo_representante`, `tlfn_lugar_trabajo_representante`, `sueldo_representante`, `vive_con_alumno`, `observacion_vive_con_alumno`) VALUES ('1','1','Padre','Jhon','69016985','Venezolana','52','02124714489','02124566','Tecnico','Alcaldia','02125557489','1203000','Si',''),
 ('2','2','Padre','eqwrqw','34234','Venezolana','2','123','123123','123','qwe23','123123','1323123','','');

-- --------------------------------------------------------

-- 
-- Dumping data for table `salud_alumno` 
-- 

INSERT INTO `salud_alumno` (`id_salud`, `id_alumno`, `vacuna_triple`, `vacuna_bcg`, `vacuna_polio`, `vacuna_hepab`, `vacuna_meningitis`, `asmatico`, `diabetico`, `alergico`, `observacion_alergia`, `control_medico`, `observacion_control`, `suministro_fiebre`, `tipo_dificultad`, `operacion`, `psicologo`, `psicopedagogo`, `observaciones_psicopedagogo`, `impedimento_fisico`, `observacion_impedimento`) VALUES ('1','1','Si','Si','Si','','Si','No','No','No','','No','','atamel','Lenguaje','Si','No','No','','No',''),
 ('2','2','','','','','','','','','','','','','0','','','','','','');

-- --------------------------------------------------------

-- 
-- Dumping data for table `situacion_economica` 
-- 

INSERT INTO `situacion_economica` (`id_situacion`, `id_alumno`, `tipo_vivienda`, `condicion_vivienda`, `personas_vivienda`, `abuelos_vivienda`, `ingreso_vivienda`, `cantidad_hermanas`, `cantidad_hermanos`, `lugar_hermanos`, `estudian_hermanos`) VALUES ('1','1','Habitacion','Alquilada','2','0','10000','1','0','Primero','Si'),
 ('2','2','Habitacion','Alquilada','2','0','1123123','32','12','Primero','Si');

-- --------------------------------------------------------

-- 
-- Dumping data for table `status_usuario` 
-- 

INSERT INTO `status_usuario` (`id_status`, `descripcion_status`) VALUES ('1','Activo'),
 ('2','Inactivo');

-- --------------------------------------------------------

-- 
-- Dumping data for table `usuarios` 
-- 

INSERT INTO `usuarios` (`id_usuario`, `cedula_usuario`, `nombre_usuario`, `login_usuario`, `pass_usuario`, `status_usuario`, `perfil_usuario`, `email_usuario`) VALUES ('1','18677970','Junior Ayala','admin','admin','1','1','elessar303@gmail.com');

-- --------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 1;

-- ------------
-- FOREIGN KEYS
-- ------------
SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE `boletines` ADD CONSTRAINT `boletines_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `boletines` ADD CONSTRAINT `boletines_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `boletines` ADD CONSTRAINT `boletines_ibfk_3` FOREIGN KEY (`id_representante`) REFERENCES `representantes` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `boletines` ADD CONSTRAINT `boletines_ibfk_4` FOREIGN KEY (`ano_escolar`) REFERENCES `ano_escolar` (`id_ano_escolar`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `canaimas` ADD CONSTRAINT `canaimas_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `canaimas` ADD CONSTRAINT `canaimas_ibfk_2` FOREIGN KEY (`modelo_canaima`) REFERENCES `modelos_canaimas` (`id_modelo`) ON DELETE RESTRICT ON UPDATE RESTRICT;

ALTER TABLE `documentos_presentados` ADD CONSTRAINT `documentos_presentados_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `procedencia_alumno` ADD CONSTRAINT `procedencia_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `representantes` ADD CONSTRAINT `representantes_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `salud_alumno` ADD CONSTRAINT `salud_alumno_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `situacion_economica` ADD CONSTRAINT `situacion_economica_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `usuarios` ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`perfil_usuario`) REFERENCES `perfil_usuario` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `usuarios` ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`status_usuario`) REFERENCES `status_usuario` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

SET FOREIGN_KEY_CHECKS = 1;

