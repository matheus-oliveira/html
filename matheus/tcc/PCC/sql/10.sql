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
CREATE SCHEMA   `tcc` DEFAULT CHARACTER SET utf8 ;
USE `tcc` ;

-- -----------------------------------------------------
-- Table `tcc`.`perfil`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`perfil` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `perfil` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`endereco`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`endereco` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `casa` CHAR(10) NOT NULL,
  `cep` INT(8) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `complemento` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc`.`usuario`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) ,
  `sexo` ENUM('M', 'F') ,
  `dataNasc` varchar(8),
  `cpf` BIGINT(11) ,
  `perfil_id` INT ,
  `endereco_id` INT ,
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
-- Table `tcc`.`encomenda`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`encomenda` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nProtocolo` INT NOT NULL,
  `dataEntrada` DATE NOT NULL,
  `dataPrevistaSaida` DATE NOT NULL,
  `dataSaida` DATE NOT NULL,
  `valor` FLOAT NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`insumos`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`insumos` (
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
CREATE TABLE   `tcc`.`funcionario` (
  `dataAdmicao` DATE NOT NULL,
  `salario` FLOAT NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  `funcao` VARCHAR(45) NOT NULL,
  `carga horaria mensal` VARCHAR(45) NOT NULL,
  `hora de entrada` INT NOT NULL,
  `hora de saida` INT NOT NULL,
  `Encomenda_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  `insumos_id` INT NOT NULL,
  INDEX `fk_funcionario_Encomenda1_idx` (`Encomenda_id` ASC),
  INDEX `fk_funcionario_usuario1_idx` (`usuario_id` ASC),
  PRIMARY KEY (`insumos_id`),
  CONSTRAINT `fk_funcionario_Encomenda1`
    FOREIGN KEY (`Encomenda_id`)
    REFERENCES `tcc`.`encomenda` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
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
-- Table `tcc`.`categoria`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `pecaRoupa` VARCHAR(45) NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL,
  `Encomenda_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_categoria_Encomenda1_idx` (`Encomenda_id` ASC),
  CONSTRAINT `fk_categoria_Encomenda1`
    FOREIGN KEY (`Encomenda_id`)
    REFERENCES `tcc`.`encomenda` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`cliente`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`idcliente`),
  INDEX `fk_cliente_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cliente_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `tcc`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `tcc`.`telefone`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`telefone` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `telefone` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tcc`.`telefone_has_usuario`
-- -----------------------------------------------------
CREATE TABLE   `tcc`.`telefone_has_usuario` (
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


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
