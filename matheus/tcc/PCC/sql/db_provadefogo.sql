-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: tcc
-- ------------------------------------------------------
-- Server version	5.7.17-1

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



use tcc;

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pecaRoupa` varchar(45) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `Encomenda_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categoria_Encomenda1_idx` (`Encomenda_id`),
  CONSTRAINT `fk_categoria_Encomenda1` FOREIGN KEY (`Encomenda_id`) REFERENCES `encomenda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `feedback` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `fk_cliente_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_cliente_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,2,NULL,'moguedes@icloud.com','202cb962ac59075b964b07152d234b70'),(2,3,NULL,'moguedes@icloud.com','202cb962ac59075b964b07152d234b70'),(3,4,NULL,'moguedes@icloud.com','202cb962ac59075b964b07152d234b70'),(4,5,NULL,'moguedes@icloud.com','202cb962ac59075b964b07152d234b70'),(5,6,NULL,'moguedes@icloud.com','d41d8cd98f00b204e9800998ecf8427e');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encomenda`
--

DROP TABLE IF EXISTS `encomenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encomenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nProtocolo` int(11) NOT NULL,
  `dataEntrada` date NOT NULL,
  `dataPrevistaSaida` date NOT NULL,
  `dataSaida` date NOT NULL,
  `valor` float NOT NULL,
  `status` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
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
  `casa` char(10) NOT NULL,
  `cep` int(8) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(2,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(3,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(4,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(5,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(6,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(7,'23',72242051,'qnp 13 conjunto a casa 31','em frente ao base'),(8,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(9,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(10,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(11,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(12,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(13,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(14,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(15,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(16,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(17,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(18,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(19,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(20,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(21,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(22,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(23,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(24,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(25,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(26,'31',72242051,'próximo ao mercado rincon','em frente ao base'),(27,'88',72242051,'próximo ao mercado rincon','em frente ao base');
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
  `carga horaria mensal` varchar(45) NOT NULL,
  `hora de entrada` int(11) NOT NULL,
  `hora de saida` int(11) NOT NULL,
  `Encomenda_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `insumos_id` int(11) NOT NULL,
  PRIMARY KEY (`insumos_id`),
  KEY `fk_funcionario_Encomenda1_idx` (`Encomenda_id`),
  KEY `fk_funcionario_usuario1_idx` (`usuario_id`),
  CONSTRAINT `fk_funcionario_Encomenda1` FOREIGN KEY (`Encomenda_id`) REFERENCES `encomenda` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionario_insumos1` FOREIGN KEY (`insumos_id`) REFERENCES `insumos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
-- Table structure for table `insumos`
--

DROP TABLE IF EXISTS `insumos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `insumos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `preco` float NOT NULL,
  `dataCompra` date NOT NULL,
  `material` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumos`
--

LOCK TABLES `insumos` WRITE;
/*!40000 ALTER TABLE `insumos` DISABLE KEYS */;
/*!40000 ALTER TABLE `insumos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone`
--

LOCK TABLES `telefone` WRITE;
/*!40000 ALTER TABLE `telefone` DISABLE KEYS */;
INSERT INTO `telefone` VALUES (2,'11111111111'),(3,'11111111111'),(4,'11111111111'),(5,'11111111111'),(6,'11111111111'),(7,'11111111111'),(8,'11111111111'),(9,'11111111111'),(10,'11111111111'),(11,'11111111111'),(12,'11111111111'),(13,'11111111111'),(14,'11111111111'),(15,'11111111111'),(16,'11111111111'),(17,'11111111111'),(18,'11111111111'),(19,'11111111111'),(20,'11111111111');
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
  `cpf` bigint(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_endereco1_idx` (`endereco_id`),
  CONSTRAINT `fk_usuario_endereco1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'matheus','M',55566699912,22),(2,'matheus','M',55566699912,23),(3,'matheus','M',55566699912,24),(4,'matheus','M',55566699912,25),(5,'matheus','M',55566699912,26),(6,'matheus','M',55566699912,27);
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

-- Dump completed on 2017-10-24 10:19:10
