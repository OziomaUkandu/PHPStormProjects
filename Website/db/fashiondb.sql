-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema fashiondb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema fashiondb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `fashiondb` DEFAULT CHARACTER SET utf8 ;
USE `fashiondb` ;

-- -----------------------------------------------------
-- Table `fashiondb`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`User` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `UserName` VARCHAR(45) NOT NULL,
  `CustId` VARCHAR(45) NOT NULL,
  `AdminId` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fashiondb`.`City`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`City` (
  `idCity` INT NOT NULL AUTO_INCREMENT,
  `CityName` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCity`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fashiondb`.`Season`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`Season` (
  `idSeason` INT NOT NULL AUTO_INCREMENT,
  `SeasonName` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idSeason`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fashiondb`.`Favourites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`Favourites` (
  `idFavourites` INT NOT NULL AUTO_INCREMENT,
  `User_idUser` INT NOT NULL,
  `City_idCity` INT NOT NULL,
  `Season_idSeason` INT NOT NULL,
  PRIMARY KEY (`idFavourites`),
  INDEX `fk_Favourites_User_idx` (`User_idUser` ASC) VISIBLE,
  INDEX `fk_Favourites_City1_idx` (`City_idCity` ASC) VISIBLE,
  INDEX `fk_Favourites_Season1_idx` (`Season_idSeason` ASC) VISIBLE,
  CONSTRAINT `fk_Favourites_User`
    FOREIGN KEY (`User_idUser`)
    REFERENCES `fashiondb`.`User` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Favourites_City1`
    FOREIGN KEY (`City_idCity`)
    REFERENCES `fashiondb`.`City` (`idCity`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Favourites_Season1`
    FOREIGN KEY (`Season_idSeason`)
    REFERENCES `fashiondb`.`Season` (`idSeason`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fashiondb`.`Item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`Item` (
  `idItem` INT NOT NULL AUTO_INCREMENT,
  `topSize` VARCHAR(45) NOT NULL,
  `bottomSize` VARCHAR(45) NOT NULL,
  `shoeSize` VARCHAR(45) NOT NULL,
  `accessorySize` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idItem`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `fashiondb`.`Favourites_has_Item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `fashiondb`.`Favourites_has_Item` (
  `Favourites_idFavourites` INT NOT NULL,
  `Item_idItem` INT NOT NULL,
  PRIMARY KEY (`Favourites_idFavourites`, `Item_idItem`),
  INDEX `fk_Favourites_has_Item_Item1_idx` (`Item_idItem` ASC) VISIBLE,
  INDEX `fk_Favourites_has_Item_Favourites1_idx` (`Favourites_idFavourites` ASC) VISIBLE,
  CONSTRAINT `fk_Favourites_has_Item_Favourites1`
    FOREIGN KEY (`Favourites_idFavourites`)
    REFERENCES `fashiondb`.`Favourites` (`idFavourites`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Favourites_has_Item_Item1`
    FOREIGN KEY (`Item_idItem`)
    REFERENCES `fashiondb`.`Item` (`idItem`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
