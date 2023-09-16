-- MySQL dump 10.14  Distrib 5.5.68-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: atacadao
-- ------------------------------------------------------
-- Server version	5.5.68-MariaDB

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


DROP TABLE IF EXISTS `gerencial_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gerencial_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `merc` int(11) DEFAULT NULL,
  `dig` int(11) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `embalagem` varchar(200) DEFAULT NULL,
  `fornecedor` varchar(200) DEFAULT NULL,
  `dt_ult_ent` varchar(30) DEFAULT NULL,
  `qtde_ult_ent` int(11) DEFAULT NULL,
  `emb_1` int(11) DEFAULT NULL,
  `emb_9` int(11) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `setor_loja` varchar(200) DEFAULT NULL,
  `nao_vende` int(11) DEFAULT NULL,
  `ped_pend` int(11) DEFAULT NULL,
  `custo_ult_ent` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `vnd_30d` int(11) DEFAULT NULL,
  `est_x_meses` float DEFAULT NULL,
  `est_x_meses_x_30` float DEFAULT NULL,
  `vlr_vnd_30d` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=752210 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `gerencial_web_srt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gerencial_web_srt` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `cod_int` varchar(50) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `embalagem` varchar(100) DEFAULT NULL,
  `ult_ent` varchar(50) DEFAULT NULL,
  `cmv` varchar(100) DEFAULT NULL,
  `valor_vnd` varchar(50) DEFAULT NULL,
  `ult_vnd` varchar(50) DEFAULT NULL,
  `rent` varchar(20) DEFAULT NULL,
  `par` varchar(40) DEFAULT NULL,
  `preco_vnd` varchar(40) DEFAULT NULL,
  `por_valor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2932550 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `gerencial_web_temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gerencial_web_temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `merc` int(11) DEFAULT NULL,
  `dig` int(11) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `embalagem` varchar(200) DEFAULT NULL,
  `fornecedor` varchar(200) DEFAULT NULL,
  `dt_ult_ent` varchar(30) DEFAULT NULL,
  `qtde_ult_ent` int(11) DEFAULT NULL,
  `emb_1` int(11) DEFAULT NULL,
  `emb_9` int(11) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `setor_loja` varchar(200) DEFAULT NULL,
  `nao_vende` int(11) DEFAULT NULL,
  `ped_pend` int(11) DEFAULT NULL,
  `custo_ult_ent` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `vnd_30d` int(11) DEFAULT NULL,
  `est_x_meses` float DEFAULT NULL,
  `est_x_meses_x_30` float DEFAULT NULL,
  `vlr_vnd_30d` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=220937 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `log_ger_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_ger_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `data` date DEFAULT NULL,
  `data2` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `n` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3165 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


DROP TABLE IF EXISTS `usuarios_ger_web`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_ger_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `niveis_acesso_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;


INSERT INTO `usuarios_ger_web` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','admin','3');
