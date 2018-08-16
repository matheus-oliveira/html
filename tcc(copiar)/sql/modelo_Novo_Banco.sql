drop database tcc;
















-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8 ;
USE `tcc` ;

-- -----------------------------------------------------
-- Table `tcc`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`categoria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `pecaRoupa` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`item` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nProtocolo` INT(11) NOT NULL,
  `dataEntrada` DATE NOT NULL,
  `dataPrevistaSaida` DATE NOT NULL,
  `dataSaida` DATE NOT NULL,
  `valor` FLOAT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `categoria_id` INT(11) NOT NULL,
  `produto` VARCHAR(45) NULL,
  `cintura` VARCHAR(45) NULL,
  `alturaQuadril` VARCHAR(45) NULL,
  `quadril` VARCHAR(45) NULL,
  `comprimento` VARCHAR(45) NULL,
  `gancho` VARCHAR(45) NULL,
  `ombro` VARCHAR(45) NULL,
  `costa` VARCHAR(45) NULL,
  `busto` VARCHAR(45) NULL,
  `alturaBusto` VARCHAR(45) NULL,
  `alturaCintura` VARCHAR(45) NULL,
  `manga` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_item_categoria1_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_item_categoria1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `tcc`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`encomenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`encomenda` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `feedback` VARCHAR(45) NULL DEFAULT NULL,
  `iten_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_encomenda_iten1_idx` (`iten_id` ASC),
  CONSTRAINT `fk_encomenda_iten1`
    FOREIGN KEY (`iten_id`)
    REFERENCES `tcc`.`item` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`endereco` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(45) NOT NULL,
  `casa` CHAR(10) NOT NULL,
  `cep` INT(8) NOT NULL,
  `complemento` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 44
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`insumo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`insumo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `quantidade` INT(11) NOT NULL,
  `preco` FLOAT NOT NULL,
  `produto` VARCHAR(45) NOT NULL,
  `dataCompra` DATE NOT NULL,
  `tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`perfil` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`usuario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  `dataNasc` DATE NOT NULL,
  `cpf` BIGINT(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `perfil_id` INT(11) NOT NULL,
  `endereco_id` INT(11) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `encomenda_id` INT(11) NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_perfil_idx` (`perfil_id` ASC),
  INDEX `fk_usuario_endereco1_idx` (`endereco_id` ASC),
  INDEX `fk_usuario_encomenda1_idx` (`encomenda_id` ASC),
  CONSTRAINT `fk_usuario_endereco1`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `tcc`.`endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_perfil`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `tcc`.`perfil` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_encomenda1`
    FOREIGN KEY (`encomenda_id`)
    REFERENCES `tcc`.`encomenda` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 33
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`funcionario` (
  `dataAdmicao` DATE NOT NULL,
  `salario` FLOAT NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `funcao` VARCHAR(45) NOT NULL,
  `cargaHoraria` VARCHAR(45) NOT NULL,
  `horaEntrada` INT(11) NOT NULL,
  `horaSaida` INT(11) NOT NULL COMMENT '\n\n\n',
  `usuario_id` INT(11) NOT NULL,
  `insumos_id` INT(11) NOT NULL,
  `telefone` BIGINT NOT NULL,
  INDEX `fk_funcionario_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_funcionario_insumos1`
    FOREIGN KEY (`insumos_id`)
    REFERENCES `tcc`.`insumo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionario_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
