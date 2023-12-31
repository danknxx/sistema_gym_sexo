-- MySQL Script generated by MySQL Workbench
-- Thu Sep 14 16:16:15 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistema_gym
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistema_gym
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistema_gym` DEFAULT CHARACTER SET utf8 ;
USE `sistema_gym` ;

-- -----------------------------------------------------
-- Table `sistema_gym`.`miembros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`miembros` (
  `idmiembros` INT NOT NULL AUTO_INCREMENT,
  `ci` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `telefono` INT NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  PRIMARY KEY (`idmiembros`),
  UNIQUE INDEX `idmiembros_UNIQUE` (`idmiembros` ASC) VISIBLE,
  UNIQUE INDEX `telefono_UNIQUE` (`telefono` ASC) VISIBLE,
  UNIQUE INDEX `ci_UNIQUE` (`ci` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_gym`.`pagos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`pagos` (
  `idpagos` INT NOT NULL AUTO_INCREMENT,
  `idmiembros` INT NOT NULL,
  `fecha_pago` DATE NOT NULL,
  `monto` DECIMAL(7) NOT NULL,
  `estado` TINYINT NOT NULL,
  PRIMARY KEY (`idpagos`),
  UNIQUE INDEX `idpagos_UNIQUE` (`idpagos` ASC) VISIBLE,
  INDEX `fk_pagos_miembros_idx` (`idmiembros` ASC) VISIBLE,
  CONSTRAINT `fk_pagos_miembros`
    FOREIGN KEY (`idmiembros`)
    REFERENCES `sistema_gym`.`miembros` (`idmiembros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_gym`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`roles` (
  `idroles` INT NOT NULL AUTO_INCREMENT,
  `nombre_rol` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idroles`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_gym`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`empleados` (
  `idempleados` INT NOT NULL AUTO_INCREMENT,
  `idroles` INT NOT NULL,
  `ci` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `fecha_inicio` DATE NOT NULL,
  `telefono` INT NOT NULL,
  `admin` TINYINT NOT NULL DEFAULT 0,
  `clave` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idempleados`),
  UNIQUE INDEX `idempleados_UNIQUE` (`idempleados` ASC) VISIBLE,
  INDEX `fk_empleados_roles1_idx` (`idroles` ASC) VISIBLE,
  UNIQUE INDEX `telefono_UNIQUE` (`telefono` ASC) VISIBLE,
  UNIQUE INDEX `ci_UNIQUE` (`ci` ASC) VISIBLE,
  CONSTRAINT `fk_empleados_roles1`
    FOREIGN KEY (`idroles`)
    REFERENCES `sistema_gym`.`roles` (`idroles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_gym`.`horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`horario` (
  `idhorario` INT NOT NULL AUTO_INCREMENT,
  `idempleados` INT NOT NULL,
  `dia_semana` VARCHAR(20) NOT NULL,
  `hora_inicio` TIME NOT NULL,
  `hora_fin` TIME NOT NULL,
  PRIMARY KEY (`idhorario`),
  INDEX `fk_horario_empleados1_idx` (`idempleados` ASC) VISIBLE,
  CONSTRAINT `fk_horario_empleados1`
    FOREIGN KEY (`idempleados`)
    REFERENCES `sistema_gym`.`empleados` (`idempleados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistema_gym`.`inventario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistema_gym`.`inventario` (
  `idinventario` INT NOT NULL AUTO_INCREMENT,
  `empleados_idempleados` INT NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `estado` TINYINT NOT NULL,
  PRIMARY KEY (`idinventario`),
  INDEX `fk_inventario_empleados1_idx` (`empleados_idempleados` ASC) VISIBLE,
  CONSTRAINT `fk_inventario_empleados1`
    FOREIGN KEY (`empleados_idempleados`)
    REFERENCES `sistema_gym`.`empleados` (`idempleados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
