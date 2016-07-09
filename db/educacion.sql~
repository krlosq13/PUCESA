-- MySQL dump 10.13  Distrib 5.6.24, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: educacion
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos` (
  `idalumnos` int(11) NOT NULL AUTO_INCREMENT,
  `dni` varchar(8) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `paterno` varchar(60) NOT NULL,
  `materno` varchar(60) NOT NULL,
  `fecNacimiento` date NOT NULL,
  `genero` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idalumnos`),
  UNIQUE KEY `dni_UNIQUE` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (1,'12345678','Maria Isabel','Chavez','Lujano','1999-05-23','Femenino','951235689','mrizitalove@hotmail.com',NULL),(2,'1','Juan','Quispe','Soto','1982-12-05','Masculino','951233445','',NULL),(3,'2','Gabriel','Mamani','Mamani','2000-04-03','Masculino','','ricky@gmail.com',NULL),(4,'3','Yulisa','Soto','Soto','1999-01-23','Femenino','','',NULL),(5,'4','German','Paredes','Mamani','2001-03-04','Masculino','','',NULL),(6,'5','Sabina','Torres','Manco','2002-07-09','Femenino','','',NULL),(7,'6','Edit','Quispe','Mamani','1999-12-22','Femenino','','yuvus@gmail.com',NULL),(8,'7','Lucia','Mamani','Jauira','1982-04-14','Femenino','95132135','',NULL),(9,'8','Jorge','Paredes','Huancollo','2002-01-03','Masculino','951656546','',NULL),(10,'9','Sandro','Quispe','Sanchez','1994-06-07','Masculino','97165461','',NULL),(11,'10','Mily','Sauce','Mamani','1995-03-09','Femenino','','estefan@gmail.com',NULL),(12,'11','Estefany','Lima','Paredes','1995-04-08','Femenino','','',NULL),(13,'12','Francesca','Mamani','Guzman','1982-01-05','Femenino','95653212','',NULL),(14,'13','Luis','Quispe','Mamani','1985-04-02','Masculino','','pocho@hotmail.com',NULL),(15,'15','Juan','Zapana','Romero','1978-05-15','Masculino','972252454','zapana@hotmail.com',NULL),(69,'','','','','0000-00-00','','','',NULL),(89,'01234567','BALDARRAGO','arizaca','limachi','1982-12-05','Masculino','951425632','balconabc@gmail.com',NULL);
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asistencia`
--

DROP TABLE IF EXISTS `asistencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asistencia` (
  `idasistencia` int(11) NOT NULL AUTO_INCREMENT,
  `idalumno` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `asistencia` tinyint(4) NOT NULL DEFAULT '0',
  `idalumnos` int(11) NOT NULL,
  `idmatriculas` int(11) NOT NULL,
  PRIMARY KEY (`idasistencia`),
  KEY `fk_asistencia_alumnos1_idx` (`idalumnos`),
  KEY `fk_asistencia_matriculas1_idx` (`idmatriculas`),
  CONSTRAINT `fk_asistencia_alumnos1` FOREIGN KEY (`idalumnos`) REFERENCES `alumnos` (`idalumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_asistencia_matriculas1` FOREIGN KEY (`idmatriculas`) REFERENCES `matriculas` (`idmatriculas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asistencia`
--

LOCK TABLES `asistencia` WRITE;
/*!40000 ALTER TABLE `asistencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `asistencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargocurso`
--

DROP TABLE IF EXISTS `cargocurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargocurso` (
  `idcargocurso` int(11) NOT NULL AUTO_INCREMENT,
  `idCurso` varchar(45) NOT NULL,
  `idDocente` int(11) NOT NULL,
  `idfrecuencia` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `numHoras` int(2) NOT NULL DEFAULT '20',
  `laboratorio` varchar(10) NOT NULL DEFAULT 'Lab 01',
  `feccreacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observacion` varchar(255) DEFAULT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idcargocurso`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargocurso`
--

LOCK TABLES `cargocurso` WRITE;
/*!40000 ALTER TABLE `cargocurso` DISABLE KEYS */;
INSERT INTO `cargocurso` VALUES (1,'1',1,2,6,'2016-04-03','2016-05-01',20,'Lab 01','2016-06-27 13:22:21','Inicio Retrasado',1),(2,'1',1,2,8,'2016-04-03','2016-05-01',20,'Lab 01','2016-06-27 13:22:21',NULL,1),(3,'1',1,2,9,'2016-05-02','2016-06-06',20,'Lab 01','2016-06-28 13:22:21',NULL,1),(4,'2',1,2,6,'2016-05-02','2016-06-03',20,'Lab 01','2016-06-28 13:40:55',NULL,1),(5,'2',1,2,8,'2016-05-07','2016-06-06',20,'Lab 01','2016-06-28 13:40:55',NULL,1);
/*!40000 ALTER TABLE `cargocurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carreraprof`
--

DROP TABLE IF EXISTS `carreraprof`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreraprof` (
  `idcarreraProf` int(11) NOT NULL AUTO_INCREMENT,
  `carrera` varchar(45) DEFAULT NULL,
  `feccreacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcarreraProf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreraprof`
--

LOCK TABLES `carreraprof` WRITE;
/*!40000 ALTER TABLE `carreraprof` DISABLE KEYS */;
INSERT INTO `carreraprof` VALUES (1,'Computacion e Informática','2016-06-27 21:18:47');
/*!40000 ALTER TABLE `carreraprof` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `idcursos` int(11) NOT NULL AUTO_INCREMENT,
  `cursos` varchar(60) NOT NULL,
  `idmodulo` int(11) NOT NULL,
  PRIMARY KEY (`idcursos`),
  KEY `fk_cursos_modulo1_idx` (`idmodulo`),
  CONSTRAINT `fk_cursos_modulo1` FOREIGN KEY (`idmodulo`) REFERENCES `modulo` (`idmodulo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Windows',101),(2,'Microsoft Word',101),(3,'Microsoft Excel',101),(4,'Microsoft Excel Avanzado',101),(5,'Microsoft Power Point',101);
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docentes`
--

DROP TABLE IF EXISTS `docentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docentes` (
  `iddocentes` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(60) DEFAULT NULL,
  `apellidos` varchar(120) DEFAULT NULL,
  `sexo` varchar(12) DEFAULT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `profesion` varchar(100) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `fecNacimiento` date DEFAULT NULL,
  `habilidades` varchar(300) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iddocentes`)
) ENGINE=InnoDB AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docentes`
--

LOCK TABLES `docentes` WRITE;
/*!40000 ALTER TABLE `docentes` DISABLE KEYS */;
INSERT INTO `docentes` VALUES (1000,'Edgar','Apaza Choque','Masculino','40023528','Ing. Estadistico e Informatico','Desarrollo de Software',NULL,NULL,NULL);
/*!40000 ALTER TABLE `docentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estadisticas`
--

DROP TABLE IF EXISTS `estadisticas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estadisticas` (
  `idestadisticas` int(11) NOT NULL AUTO_INCREMENT,
  `medInformacion` varchar(45) DEFAULT NULL,
  `idalumno` int(11) DEFAULT NULL,
  PRIMARY KEY (`idestadisticas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estadisticas`
--

LOCK TABLES `estadisticas` WRITE;
/*!40000 ALTER TABLE `estadisticas` DISABLE KEYS */;
/*!40000 ALTER TABLE `estadisticas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `promedio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_seccion` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_estudiante_secciones_idx` (`id_seccion`),
  CONSTRAINT `fk_estudiante_secciones` FOREIGN KEY (`id_seccion`) REFERENCES `secciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'Carlos Fernandez',22,15,'',1,'0000-00-00 00:00:00'),(2,'Jorge Galvez',24,14.78,'',1,'2016-07-02 16:19:20'),(3,'Estevan Lazo',12,14,'',1,'2016-07-02 16:19:42');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `frecuencia`
--

DROP TABLE IF EXISTS `frecuencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frecuencia` (
  `idfrecuencia` int(11) NOT NULL AUTO_INCREMENT,
  `frecuencia` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idfrecuencia`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frecuencia`
--

LOCK TABLES `frecuencia` WRITE;
/*!40000 ALTER TABLE `frecuencia` DISABLE KEYS */;
INSERT INTO `frecuencia` VALUES (1,'L-V'),(2,'Sabados'),(3,'Domingos'),(4,'M-J'),(5,'L-M-V');
/*!40000 ALTER TABLE `frecuencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario`
--

DROP TABLE IF EXISTS `horario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario` (
  `idhorario` int(11) NOT NULL AUTO_INCREMENT,
  `horas` varchar(20) NOT NULL,
  PRIMARY KEY (`idhorario`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario`
--

LOCK TABLES `horario` WRITE;
/*!40000 ALTER TABLE `horario` DISABLE KEYS */;
INSERT INTO `horario` VALUES (1,'8 am - 10 am'),(2,'10 am - 12 am'),(3,'1 pm - 3 pm'),(4,'3 pm - 5 pm'),(5,'5 pm - 7 pm'),(6,'8 am - 1 pm'),(7,'1 pm - 6 pm'),(8,'1 pm - 5 pm'),(9,'5 pm - 9 pm');
/*!40000 ALTER TABLE `horario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `idmatriculas` int(11) NOT NULL AUTO_INCREMENT,
  `fecMatricula` datetime NOT NULL,
  `idcargocurso` int(11) NOT NULL,
  `idalumnos` int(11) NOT NULL,
  `idpersonal` int(11) NOT NULL,
  PRIMARY KEY (`idmatriculas`),
  KEY `fk_matriculas_cursos1_idx` (`idcargocurso`),
  KEY `fk_matriculas_personal1_idx` (`idpersonal`),
  KEY `fk_matriculas_alumnos1_idx` (`idalumnos`),
  CONSTRAINT `fk_matriculas_alumnos1` FOREIGN KEY (`idalumnos`) REFERENCES `alumnos` (`idalumnos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_cursos1` FOREIGN KEY (`idcargocurso`) REFERENCES `cargocurso` (`idcargocurso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_matriculas_personal1` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,'2016-06-28 00:00:00',1,1,1),(2,'2016-06-28 00:00:00',1,2,1),(3,'2016-06-28 00:00:00',1,3,1),(4,'2016-06-28 00:00:00',1,4,1),(5,'2016-06-28 00:00:00',1,5,1),(6,'2016-06-28 00:00:00',2,6,1),(7,'2016-06-28 00:00:00',2,7,1),(8,'2016-06-28 00:00:00',2,8,1),(9,'2016-06-28 00:00:00',2,9,1),(10,'2016-06-28 00:00:00',2,10,1),(11,'2016-06-28 00:00:00',2,11,1),(12,'2016-06-28 00:00:00',2,12,1),(13,'2016-06-28 00:00:00',4,1,1),(14,'2016-06-28 00:00:00',4,2,1),(15,'2016-06-28 00:00:00',4,3,1),(16,'2016-06-28 00:00:00',4,4,1),(17,'2016-06-28 00:00:00',4,5,1),(18,'2016-06-28 00:00:00',4,6,1),(19,'2016-06-28 00:00:00',4,7,1),(20,'2016-06-28 00:00:00',4,8,1);
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo` (
  `idmodulo` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `idcarrera` int(11) NOT NULL,
  PRIMARY KEY (`idmodulo`),
  KEY `fk_modulo_carreraprof1_idx` (`idcarrera`),
  CONSTRAINT `fk_modulo_carreraprof1` FOREIGN KEY (`idcarrera`) REFERENCES `carreraprof` (`idcarreraProf`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (101,'Modulo I','Reparacion de Equipos',1),(102,'Modulo II','Redes y Procesos',1),(103,'Modulo III','Sistemas Web',1);
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagoinscripcion`
--

DROP TABLE IF EXISTS `pagoinscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagoinscripcion` (
  `idpagoInscripcion` int(11) NOT NULL AUTO_INCREMENT,
  `fechaInscripcion` datetime NOT NULL,
  `nroBoleta` varchar(20) NOT NULL,
  `monto` double NOT NULL,
  PRIMARY KEY (`idpagoInscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagoinscripcion`
--

LOCK TABLES `pagoinscripcion` WRITE;
/*!40000 ALTER TABLE `pagoinscripcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagoinscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagoscuotas`
--

DROP TABLE IF EXISTS `pagoscuotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagoscuotas` (
  `idpagosCuotas` int(11) NOT NULL AUTO_INCREMENT,
  `fechaPago` datetime DEFAULT NULL,
  `nroBoleta` varchar(20) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `nroCuota` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpagosCuotas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagoscuotas`
--

LOCK TABLES `pagoscuotas` WRITE;
/*!40000 ALTER TABLE `pagoscuotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagoscuotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagosmatricula`
--

DROP TABLE IF EXISTS `pagosmatricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagosmatricula` (
  `idpagosMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `fechaMatricula` datetime DEFAULT NULL,
  `nroBoleta` varchar(20) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `nroFicha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpagosMatricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagosmatricula`
--

LOCK TABLES `pagosmatricula` WRITE;
/*!40000 ALTER TABLE `pagosmatricula` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagosmatricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal`
--

DROP TABLE IF EXISTS `personal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `sexo` varchar(9) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  `especialidad` varchar(45) DEFAULT NULL,
  `fecnacimiento` date DEFAULT NULL,
  PRIMARY KEY (`idpersonal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal`
--

LOCK TABLES `personal` WRITE;
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` VALUES (1,'Hayde','Cervantes','Mendoza','Femenino','01234567','Secretaria','Secretariado','1994-01-07');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secciones`
--

DROP TABLE IF EXISTS `secciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secciones`
--

LOCK TABLES `secciones` WRITE;
/*!40000 ALTER TABLE `secciones` DISABLE KEYS */;
INSERT INTO `secciones` VALUES (1,'Programacion');
/*!40000 ALTER TABLE `secciones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-05  7:30:17
