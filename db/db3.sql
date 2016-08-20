SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `DB` ;
USE `DB` ;

-- -----------------------------------------------------
-- Table `DB`.`PAYMENT`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`PAYMENT` (
  `Code_Pay` INT NOT NULL ,
  `Day_Pay` FLOAT NOT NULL ,
  `Days_Worked` INT NOT NULL ,
  `Tax` FLOAT NOT NULL ,
  `Chartosimo` INT NOT NULL ,
  PRIMARY KEY (`Code_Pay`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`PROVIDENCE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`PROVIDENCE` (
  `Code_Prov` INT NOT NULL ,
  `Tameio_Prov` VARCHAR(45) NOT NULL ,
  `Eisfora_Kladou_Ygeias` FLOAT NOT NULL ,
  `Eisfora_Syntakshs` FLOAT NOT NULL ,
  `Eisfora_Efapaks` FLOAT NOT NULL ,
  `Krathseis_Ygeias` FLOAT NOT NULL ,
  `Krathseis_Syntakshs` FLOAT NOT NULL ,
  PRIMARY KEY (`Code_Prov`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`POSITION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`POSITION` (
  `Code_Pos` INT NOT NULL ,
  `Department` VARCHAR(45) NOT NULL ,
  `Speciality` VARCHAR(45) NOT NULL ,
  `P_Number` INT NOT NULL ,
  `Empty_Pos` TINYINT(1) NOT NULL ,
  `Code_Pay` INT NOT NULL ,
  `Code_Prov` INT NOT NULL ,
  PRIMARY KEY (`Code_Pos`) ,
  INDEX `Code_Pay_idx` (`Code_Pay` ASC) ,
  INDEX `Code_Prov_idx` (`Code_Prov` ASC) ,
  CONSTRAINT `Code_Pay`
    FOREIGN KEY (`Code_Pay` )
    REFERENCES `DB`.`PAYMENT` (`Code_Pay` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Code_Prov`
    FOREIGN KEY (`Code_Prov` )
    REFERENCES `DB`.`PROVIDENCE` (`Code_Prov` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`EMPLOYEE`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`EMPLOYEE` (
  `AFM` INT NOT NULL ,
  `Name` VARCHAR(45) NOT NULL ,
  `Surname` VARCHAR(45) NOT NULL ,
  `Street` VARCHAR(45) NOT NULL ,
  `S_Number` INT NOT NULL ,
  `Postal_Code` INT NOT NULL ,
  `Speciality` VARCHAR(45) NOT NULL ,
  `Train_Level` VARCHAR(45) NOT NULL ,
  `Family_Status` VARCHAR(45) NOT NULL ,
  `Children_No` INT NOT NULL ,
  `Code_Pos` INT NOT NULL ,
  `Date_Start` DATE NOT NULL ,
  `Date_End` DATE NOT NULL ,
  PRIMARY KEY (`AFM`) ,
  CONSTRAINT `Code_Pos`
    FOREIGN KEY (`Code_Pos` )
    REFERENCES `DB`.`POSITION` (`Code_Pos` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`FINANCIAL_SUMMARY`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`FINANCIAL_SUMMARY` (
  `AFM` INT NOT NULL ,
  `Financial_Year` YEAR NOT NULL ,
  `Miktes_Apodoxes_Etous` INT NOT NULL ,
  `Sunolo_Krathsewn_Etous` INT NOT NULL ,
  PRIMARY KEY (`AFM`, `Financial_Year`),
  CONSTRAINT `AFM3`
    FOREIGN KEY (`AFM` )
    REFERENCES `DB`.`EMPLOYEE` (`AFM` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`PROMOTION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`PROMOTION` (
  `AFM` INT NOT NULL ,
  `Date_Done` DATE NOT NULL ,
  `New_Pos` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`AFM`, `Date_Done`) ,
  INDEX `AFM_idx` (`AFM` ASC) ,
  CONSTRAINT `AFM`
    FOREIGN KEY (`AFM` )
    REFERENCES `DB`.`EMPLOYEE` (`AFM` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`EVALUATION`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`EVALUATION` (
  `AFM` INT NOT NULL ,
  `Date_Done` DATE NOT NULL ,
  `Score` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`AFM`, `Date_Done`) ,
  INDEX `AFM_idx` (`AFM` ASC) ,
  CONSTRAINT `AFM2`
    FOREIGN KEY (`AFM` )
    REFERENCES `DB`.`EMPLOYEE` (`AFM` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`MME`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`MME` (
  `Code_MME` INT NOT NULL ,
  `Name` VARCHAR(45) NOT NULL ,
  `MME_Type` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Code_MME`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB`.`RECRUITMENT`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `DB`.`RECRUITMENT` (
  `Code_Pos` INT NULL ,
  `Code_MME` INT NOT NULL ,
  `Date_Pub` DATE NOT NULL ,
  `Duration` INT NOT NULL ,
  PRIMARY KEY (`Code_Pos`, `Code_MME`, `Date_Pub`) ,
  INDEX `Code_Pos_idx` (`Code_Pos` ASC) ,
  INDEX `Code_MME_idx` (`Code_MME` ASC) ,
  CONSTRAINT `Code_Pos2`
    FOREIGN KEY (`Code_Pos` )
    REFERENCES `DB`.`POSITION` (`Code_Pos` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Code_MME`
    FOREIGN KEY (`Code_MME` )
    REFERENCES `DB`.`MME` (`Code_MME` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

USE `DB` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
