SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `reserva_exercito` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `reserva_exercito` ;

-- -----------------------------------------------------
-- Table `reserva_exercito`.`militar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`militar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `posto` INT NOT NULL,
  `nome_guerra` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(150) NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `email` VARCHAR(100) NULL,
  `militar_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `login_UNIQUE` (`login` ASC),
  UNIQUE INDEX `senha_UNIQUE` (`senha` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  INDEX `fk_usuario_militar1_idx` (`militar_id` ASC),
  CONSTRAINT `fk_usuario_militar1`
    FOREIGN KEY (`militar_id`)
    REFERENCES `reserva_exercito`.`militar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`reserva` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(200) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`tipo_armamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`tipo_armamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT NULL,
  `modelo` VARCHAR(70) NULL,
  `fabricante` VARCHAR(70) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`cautela_armamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`cautela_armamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` VARCHAR(45) NOT NULL,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  `militar_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cautela_armamento_militar1_idx` (`militar_id` ASC),
  INDEX `fk_cautela_armamento_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cautela_armamento_militar1`
    FOREIGN KEY (`militar_id`)
    REFERENCES `reserva_exercito`.`militar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cautela_armamento_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `reserva_exercito`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`armamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`armamento` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `num_serie` VARCHAR(45) NOT NULL,
  `reserva_id` INT NOT NULL,
  `tipo_armamento_id` INT NOT NULL,
  `cautela_armamento_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_armamento_reserva1_idx` (`reserva_id` ASC),
  INDEX `fk_armamento_tipo_armamento1_idx` (`tipo_armamento_id` ASC),
  INDEX `fk_armamento_cautela_armamento1_idx` (`cautela_armamento_id` ASC),
  CONSTRAINT `fk_armamento_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `reserva_exercito`.`reserva` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_armamento_tipo_armamento1`
    FOREIGN KEY (`tipo_armamento_id`)
    REFERENCES `reserva_exercito`.`tipo_armamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_armamento_cautela_armamento1`
    FOREIGN KEY (`cautela_armamento_id`)
    REFERENCES `reserva_exercito`.`cautela_armamento` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`tipo_municao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`tipo_municao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `calibre` VARCHAR(45) NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`cautela_municao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`cautela_municao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` VARCHAR(45) NOT NULL,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  `militar_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cautela_municao_militar1_idx` (`militar_id` ASC),
  INDEX `fk_cautela_municao_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cautela_municao_militar1`
    FOREIGN KEY (`militar_id`)
    REFERENCES `reserva_exercito`.`militar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cautela_municao_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `reserva_exercito`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`municao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`municao` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `observacao` TEXT NULL,
  `reserva_id` INT NOT NULL,
  `tipo_municao_id` INT NOT NULL,
  `cautela_municao_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_municao_reserva1_idx` (`reserva_id` ASC),
  INDEX `fk_municao_tipo_municao1_idx` (`tipo_municao_id` ASC),
  INDEX `fk_municao_cautela_municao1_idx` (`cautela_municao_id` ASC),
  CONSTRAINT `fk_municao_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `reserva_exercito`.`reserva` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_municao_tipo_municao1`
    FOREIGN KEY (`tipo_municao_id`)
    REFERENCES `reserva_exercito`.`tipo_municao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_municao_cautela_municao1`
    FOREIGN KEY (`cautela_municao_id`)
    REFERENCES `reserva_exercito`.`cautela_municao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`tipo_acessorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`tipo_acessorio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` INT NOT NULL,
  `descricao` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`cautela_acessorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`cautela_acessorio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantidade` VARCHAR(45) NOT NULL,
  `data_inicio` DATETIME NOT NULL,
  `data_fim` DATETIME NOT NULL,
  `militar_id` INT NOT NULL,
  `usuario_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_cautela_acessorio_militar1_idx` (`militar_id` ASC),
  INDEX `fk_cautela_acessorio_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_cautela_acessorio_militar1`
    FOREIGN KEY (`militar_id`)
    REFERENCES `reserva_exercito`.`militar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cautela_acessorio_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `reserva_exercito`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`acessorio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`acessorio` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `observacao` TEXT NOT NULL,
  `reserva_id` INT NOT NULL,
  `tipo_acessorio_id` INT NOT NULL,
  `cautela_acessorio_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_acessorio_reserva1_idx` (`reserva_id` ASC),
  INDEX `fk_acessorio_tipo_acessorio1_idx` (`tipo_acessorio_id` ASC),
  INDEX `fk_acessorio_cautela_acessorio1_idx` (`cautela_acessorio_id` ASC),
  CONSTRAINT `fk_acessorio_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `reserva_exercito`.`reserva` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_acessorio_tipo_acessorio1`
    FOREIGN KEY (`tipo_acessorio_id`)
    REFERENCES `reserva_exercito`.`tipo_acessorio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_acessorio_cautela_acessorio1`
    FOREIGN KEY (`cautela_acessorio_id`)
    REFERENCES `reserva_exercito`.`cautela_acessorio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reserva_exercito`.`usuario_has_reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reserva_exercito`.`usuario_has_reserva` (
  `usuario_id` INT NOT NULL,
  `reserva_id` INT NOT NULL,
  PRIMARY KEY (`usuario_id`, `reserva_id`),
  INDEX `fk_usuario_has_reserva_reserva1_idx` (`reserva_id` ASC),
  INDEX `fk_usuario_has_reserva_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_usuario_has_reserva_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `reserva_exercito`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_reserva_reserva1`
    FOREIGN KEY (`reserva_id`)
    REFERENCES `reserva_exercito`.`reserva` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
