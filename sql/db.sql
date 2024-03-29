-- MySQL Script generated by MySQL Workbench
-- Fri Sep  8 16:24:49 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema loginci
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema loginci
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `loginci` ;
USE `loginci` ;

-- -----------------------------------------------------
-- Table `loginci`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loginci`.`user` ;

CREATE TABLE IF NOT EXISTS `loginci`.`user` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) COLLATE 'utf8mb3_spanish_ci' NOT NULL,
  `passwd` VARCHAR(64) CHARACTER SET 'utf8mb3' NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `user_UNIQUE` (`username` ASC) VISIBLE)
ENGINE = MyISAM
AUTO_INCREMENT = 3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
