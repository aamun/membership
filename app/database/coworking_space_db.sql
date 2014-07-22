SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `hash_password` VARCHAR(45) NOT NULL,
  `idMember` INT NOT NULL,
  `created` DATE NOT NULL,
  `modified` DATE NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `members` (
  `idMember` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `ife` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `student_id` VARCHAR(45) NULL,
  `membership_type` TINYINT NOT NULL,
  `created` DATE NOT NULL,
  `modified` DATE NOT NULL,
  `registration_date` DATE NOT NULL,
  PRIMARY KEY (`idMember`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bills` (
  `idBill` INT NOT NULL AUTO_INCREMENT,
  `idMember` INT NOT NULL,
  `amount` DECIMAL(10,2) NOT NULL,
  `created` DATETIME NOT NULL,
  PRIMARY KEY (`idBill`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `payments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `payments` (
  `idPayment` INT NOT NULL AUTO_INCREMENT,
  `idBill` INT NOT NULL,
  PRIMARY KEY (`idPayment`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;