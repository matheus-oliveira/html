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
-- Table structure for table `encomenda`
--

DROP TABLE IF EXISTS `encomenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `encomenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feedback` varchar(45) DEFAULT NULL,
  `iten_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_encomenda_iten1_idx` (`iten_id`),
  CONSTRAINT `fk_encomenda_iten1` FOREIGN KEY (`iten_id`) REFERENCES `item` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `telefone` bigint(20) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `dataNasc` varchar(45) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `casa` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumo`
--

LOCK TABLES `insumo` WRITE;
/*!40000 ALTER TABLE `insumo` DISABLE KEYS */;
INSERT INTO `insumo` VALUES (1,100,0.5,'botão ','2017-12-01','liso'),(2,100,0.5,'botão ','2017-12-01','liso'),(3,5,2.6,'linha ','2017-12-04','reta '),(4,5,2.6,'linha ','2017-12-04','reta '),(5,100,0.5,'botao','2017-12-03','jeans'),(6,100,0.5,'botao','2017-12-03','jeans'),(7,5,2.5,'linha branca','2017-12-13','reta');
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
  `valor` float DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `cintura` varchar(45) DEFAULT NULL,
  `produto` varchar(45) DEFAULT NULL,
  `alturaQuadril` varchar(45) DEFAULT NULL,
  `quadril` varchar(45) DEFAULT NULL,
  `comprimento` varchar(45) DEFAULT NULL,
  `gancho` varchar(45) DEFAULT NULL,
  `ombro` varchar(45) DEFAULT NULL,
  `costa` varchar(45) DEFAULT NULL,
  `busto` varchar(45) DEFAULT NULL,
  `alturaBusto` varchar(45) DEFAULT NULL,
  `alturaCintura` varchar(45) DEFAULT NULL,
  `manga` varchar(45) DEFAULT NULL,
  `punho` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item`
--

LOCK TABLES `item` WRITE;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` VALUES (1,NULL,NULL,'9','blusa',NULL,NULL,'9',NULL,'9','9','9','9',NULL,'9','9'),(2,NULL,NULL,'1','blusa',NULL,NULL,'1',NULL,'1','1','1','1',NULL,'1','1'),(7,NULL,NULL,'9','blusa',NULL,NULL,'9',NULL,'9','9','9','9',NULL,'9','9'),(8,NULL,NULL,'4','blusa',NULL,NULL,'4',NULL,'4','4','4','4',NULL,'4','4'),(21,NULL,NULL,'5','blusa',NULL,NULL,'5',NULL,'5','5','5','5',NULL,'5','5'),(22,NULL,NULL,'5','saia','5','5','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,'8','saia','8','8','8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,NULL,NULL,'5','vestido','5','5','5',NULL,'5','5','5','5','5',NULL,NULL),(28,NULL,NULL,'9','vestido','9','9','9',NULL,'9','9','9','9','9',NULL,NULL),(29,NULL,NULL,'2','blazer',NULL,NULL,'2',NULL,'2','2','2',NULL,'2','2','2'),(31,NULL,NULL,'9','blazer',NULL,NULL,'9',NULL,'9','9','9',NULL,'9','99','9');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
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
  `dataNasc` date NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `casa` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_perfil_idx` (`perfil_id`),
  CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
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

-- Dump completed on 2017-12-09 22:25:22
