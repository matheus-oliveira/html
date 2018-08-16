-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: tcc
-- ------------------------------------------------------
-- Server version	5.7.18-1

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pecaRoupa` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'bermuda','M');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encomenda`
--

DROP TABLE IF EXISTS `encomenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encomenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(45) DEFAULT NULL,
  `iten_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_encomenda_iten1_idx` (`iten_id`),
  KEY `fk_encomenda_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_encomenda_iten1` FOREIGN KEY (`iten_id`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_encomenda_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encomenda`
--

LOCK TABLES `encomenda` WRITE;
/*!40000 ALTER TABLE `encomenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `encomenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `endereco` varchar(45) NOT NULL,
  `casa` char(10) NOT NULL,
  `cep` int(8) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'1','1',1,'1'),(2,'qnn 39 conjunto a','54',72242051,'proximo ao posto de gasolina '),(3,'qnp 23 conjunto A','56',72242051,'perto do mercado'),(4,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(5,'qnp 23 conjunto A','45',72272051,''),(6,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(7,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(8,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(9,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(10,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(11,'1','1',1,'1'),(12,'1','1',1,'1'),(13,'qnp 23 conjunto d','27',72242051,'proximo ao posto de gasolina '),(14,'qnp 23 conjunto d','27',72242051,'proximo ao posto de gasolina '),(15,'qnp 19 conjunto G','2',72242051,'perto do mercado'),(16,'qnp 23 conjunto A','45',72272051,''),(17,'qnp 23 conjunto A','1',72242051,'perto do mercado'),(18,'qnp 23 conjunto A','1',72242051,'perto do mercado'),(19,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(20,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(21,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(22,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(23,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(24,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(25,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(26,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(27,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(28,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(29,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(30,'qnp 23 conjunto A','2',72242051,'perto do mercado'),(31,'qnp 23 conjunto A','2',72242051,'perto do mercado'),(32,'qnp 23 conjunto A','27',72242051,'perto do mercado'),(33,'qnp 23 conjunto A','27',72242051,'perto do mercado'),(34,'qnp 23 conjunto A','27',72242051,'perto do mercado'),(35,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(36,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(37,'qnp 23 conjunto A','45',72242051,'proximo ao posto de gasolina '),(38,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(39,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(40,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina '),(41,'qnp 23 conjunto A','27',72242051,'proximo ao posto de gasolina ');
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `dataAdmicao` date NOT NULL,
  `salario` float NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `funcao` varchar(45) NOT NULL,
  `cargaHoraria` varchar(45) NOT NULL,
  `horaEntrada` int(11) NOT NULL,
  `horaSaida` int(11) NOT NULL COMMENT '\n\n\n',
  `usuario_id` int(11) NOT NULL,
  `insumos_id` int(11) NOT NULL,
  PRIMARY KEY (`insumos_id`),
  KEY `fk_funcionario_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_funcionario_insumos1` FOREIGN KEY (`insumos_id`) REFERENCES `insumo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insumo`
--

DROP TABLE IF EXISTS `insumo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insumo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `preco` float NOT NULL,
  `produto` varchar(45) NOT NULL,
  `dataCompra` date NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumo`
--

LOCK TABLES `insumo` WRITE;
/*!40000 ALTER TABLE `insumo` DISABLE KEYS */;
INSERT INTO `insumo` VALUES (2,5,1.5,'linha branca','2017-12-31','reta'),(8,8,3,'linha verde','2017-11-15','reta'),(9,7,3,'linha cinza','2017-10-16','reta');
/*!40000 ALTER TABLE `insumo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nProtocolo` int(11) NOT NULL,
  `dataEntrada` date NOT NULL,
  `dataPrevistaSaida` date NOT NULL,
  `dataSaida` date NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_item_categoria1_idx` (`categoria_id`),
  CONSTRAINT `fk_item_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,1,'1111-11-11','1111-11-11','1111-11-11',1,'1','1',1);
/*!40000 ALTER TABLE `item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(45) NOT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'administrador',NULL),(2,'funcionario',''),(3,'gerente',NULL),(4,'Usuario',NULL);
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone`
--

LOCK TABLES `telefone` WRITE;
/*!40000 ALTER TABLE `telefone` DISABLE KEYS */;
INSERT INTO `telefone` VALUES (1,1),(2,88888888),(3,88888888),(4,88888888),(5,88888888),(6,88888888),(7,88888888),(8,88888888),(9,88888888),(10,88888888),(11,1),(12,1),(13,88888888),(14,8880000),(15,79871894),(16,88888888),(17,88555556),(18,8880000),(19,8880000),(20,8880000),(21,8880000),(22,8880000),(23,8880000),(24,8880000),(25,8880000),(26,8880000),(27,8880000),(28,8880000),(29,8880000),(30,8880000),(31,885555566),(32,885555566),(33,88855588),(34,88855588),(35,88855588),(36,88555),(37,88555),(38,88555);
/*!40000 ALTER TABLE `telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone_has_usuario`
--

DROP TABLE IF EXISTS `telefone_has_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone_has_usuario` (
  `telefone_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`telefone_id`,`usuario_id`),
  KEY `fk_telefone_has_usuario_usuario1_idx` (`usuario_id`),
  KEY `fk_telefone_has_usuario_telefone1_idx` (`telefone_id`),
  CONSTRAINT `fk_telefone_has_usuario_telefone1` FOREIGN KEY (`telefone_id`) REFERENCES `telefone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_telefone_has_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone_has_usuario`
--

LOCK TABLES `telefone_has_usuario` WRITE;
/*!40000 ALTER TABLE `telefone_has_usuario` DISABLE KEYS */;
INSERT INTO `telefone_has_usuario` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(15,9),(17,10),(18,11),(19,12),(20,13),(21,14),(22,15),(23,16),(24,17),(25,18),(26,19),(27,20),(28,21),(29,22),(30,23),(31,24),(32,25),(33,26),(34,27),(35,28),(36,29),(37,30),(38,31);
/*!40000 ALTER TABLE `telefone_has_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `dataNasc` date NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_perfil_idx` (`perfil_id`),
  KEY `fk_usuario_endereco1_idx` (`endereco_id`),
  CONSTRAINT `fk_usuario_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'1','M','1111-11-11',1,'1','1',1,1),(2,'matheus','M','1990-11-19',7897977989,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,2),(3,'matheus','M','2006-03-21',55566699977,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,3),(4,'matheus','M','2006-03-21',55566699977,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,4),(5,'maria','F','2222-10-10',45465446,'maria @teste .com','202cb962ac59075b964b07152d234b70',1,5),(6,'matheus','M','2006-03-21',55566699977,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,6),(7,'matheus','M','2006-03-21',55566699977,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,7),(8,'matheus','M','2006-03-21',55566699977,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,8),(9,'joaquina','F','1989-11-09',6588654456,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,15),(10,'mariazinha','F','2003-07-01',45646548,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,18),(11,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,19),(12,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,20),(13,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,21),(14,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,22),(15,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,23),(16,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,24),(17,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,25),(18,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,26),(19,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,27),(20,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,28),(21,'joaninha','F','2000-06-30',7897977989,'joana@gmail.com','202cb962ac59075b964b07152d234b70',1,29),(22,'sebastiao','F','2008-05-25',7897977989,'sebastiao@gmail.com','202cb962ac59075b964b07152d234b70',1,30),(23,'sebastiao','F','2008-05-25',7897977989,'sebastiao@gmail.com','202cb962ac59075b964b07152d234b70',1,31),(24,'martina ','F','1998-05-24',1234567890,'martina@gmail.com','d41d8cd98f00b204e9800998ecf8427e',1,33),(25,'martina ','F','1998-05-24',1234567890,'martina@gmail.com','d41d8cd98f00b204e9800998ecf8427e',1,34),(26,'joaquin','M','2012-12-31',1234567890,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,35),(27,'joaquin','M','2012-12-31',1234567890,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,36),(28,'joaquin','M','2012-12-31',1234567890,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,37),(29,'marcus','M','2001-08-30',1234567890,'moguedes98@gmail.com','d41d8cd98f00b204e9800998ecf8427e',1,39),(30,'marcus','M','2001-08-30',1234567890,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,40),(31,'marcus','M','2001-08-30',1234567890,'moguedes98@gmail.com','202cb962ac59075b964b07152d234b70',1,41);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27  9:57:58
