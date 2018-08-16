-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tcc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tcc` DEFAULT CHARACTER SET utf8 ;
USE `tcc` ;

-- -----------------------------------------------------
-- Table `tcc`.`perfil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`perfil` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `endereco` VARCHAR(45) NOT NULL,
  `casa` CHAR(10) NOT NULL,
  `cep` INT(8) NOT NULL,
  `complemento` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  `dataNasc` DATE NOT NULL,
  `cpf` BIGINT(11) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `perfil_id` INT NOT NULL,
  `endereco_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuario_perfil_idx` (`perfil_id` ASC),
  INDEX `fk_usuario_endereco1_idx` (`endereco_id` ASC),
  CONSTRAINT `fk_usuario_perfil`
    FOREIGN KEY (`perfil_id`)
    REFERENCES `tcc`.`perfil` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_endereco1`
    FOREIGN KEY (`endereco_id`)
    REFERENCES `tcc`.`endereco` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pecaRoupa` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
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
  `categoria_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_item_categoria1_idx` (`categoria_id` ASC),
  CONSTRAINT `fk_item_categoria1`
    FOREIGN KEY (`categoria_id`)
    REFERENCES `tcc`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`insumos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`insumos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT NOT NULL,
  `preco` FLOAT NOT NULL,
  `dataCompra` DATE NOT NULL,
  `material` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
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
  `horaEntrada` INT NOT NULL,
  `horaSaida` INT NOT NULL COMMENT '\n\n\n',
  `usuario_id` INT NOT NULL,
  `insumos_id` INT NOT NULL,
  INDEX `fk_funcionario_usuario1_idx` (`usuario_id` ASC),
  PRIMARY KEY (`insumos_id`),
  CONSTRAINT `fk_funcionario_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionario_insumos1`
    FOREIGN KEY (`insumos_id`)
    REFERENCES `tcc`.`insumos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`telefone`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`telefone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `telefone` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc`.`telefone_has_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`telefone_has_usuario` (
  `telefone_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`telefone_id`, `usuario_id`),
  INDEX `fk_telefone_has_usuario_usuario1_idx` (`usuario_id` ASC),
  INDEX `fk_telefone_has_usuario_telefone1_idx` (`telefone_id` ASC),
  CONSTRAINT `fk_telefone_has_usuario_telefone1`
    FOREIGN KEY (`telefone_id`)
    REFERENCES `tcc`.`telefone` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_telefone_has_usuario_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc`.`encomenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tcc`.`encomenda` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `feedback` VARCHAR(45) NULL,
  `iten_id` INT(11) NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_encomenda_iten1_idx` (`iten_id` ASC),
  INDEX `fk_encomenda_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_encomenda_iten1`
    FOREIGN KEY (`iten_id`)
    REFERENCES `tcc`.`item` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_encomenda_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
