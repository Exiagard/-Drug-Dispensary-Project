-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema DrugDispensaryDatabase
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DrugDispensaryDatabase
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DrugDispensaryDatabase` DEFAULT CHARACTER SET utf8 ;
USE `DrugDispensaryDatabase` ;

-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Doctors`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Doctors` (
  `DoctorID` INT NOT NULL AUTO_INCREMENT,
  `DoctorSSN` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Speciality` VARCHAR(45) NOT NULL,
  `YOE` INT NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`DoctorID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Patients`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Patients` (
  `PatientID` INT NOT NULL AUTO_INCREMENT,
  `PatientSSN` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL COMMENT '\n',
  `Address` VARCHAR(45) NOT NULL,
  `Age` INT NOT NULL,
  `PrimaryPhysician` INT NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  INDEX `patientfk1_idx` (`PrimaryPhysician` ASC) VISIBLE,
  PRIMARY KEY (`PatientID`),
  CONSTRAINT `patientfk1`
    FOREIGN KEY (`PrimaryPhysician`)
    REFERENCES `DrugDispensaryDatabase`.`Doctors` (`DoctorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Pharmacists`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Pharmacists` (
  `PharmacistID` INT NOT NULL AUTO_INCREMENT,
  `PharmacyName` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(45) NOT NULL,
  `PhoneNumber` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`PharmacistID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`PharmaceuticalCompanies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`PharmaceuticalCompanies` (
  `PCID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `PhoneNumber` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`PCID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Drugs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Drugs` (
  `DrugID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Formula` VARCHAR(45) NOT NULL,
  `PCID` INT NOT NULL,
  PRIMARY KEY (`DrugID`),
  INDEX `dfk1_idx` (`PCID` ASC) VISIBLE,
  CONSTRAINT `dfk1`
    FOREIGN KEY (`PCID`)
    REFERENCES `DrugDispensaryDatabase`.`PharmaceuticalCompanies` (`PCID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Prescriptions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Prescriptions` (
  `PrescriptionID` INT NOT NULL AUTO_INCREMENT,
  `DrugID` INT NOT NULL,
  `DoctorID` INT NOT NULL,
  `PatientID` INT NOT NULL,
  `Prescription` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`PrescriptionID`),
  INDEX `pfk1_idx` (`PatientID` ASC) VISIBLE,
  INDEX `dipfk2_idx` (`DoctorID` ASC) VISIBLE,
  INDEX `prfk3_idx` (`DrugID` ASC) VISIBLE,
  CONSTRAINT `prfk1`
    FOREIGN KEY (`PatientID`)
    REFERENCES `DrugDispensaryDatabase`.`Patients` (`PatientID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `prfk2`
    FOREIGN KEY (`DoctorID`)
    REFERENCES `DrugDispensaryDatabase`.`Doctors` (`DoctorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `prfk3`
    FOREIGN KEY (`DrugID`)
    REFERENCES `DrugDispensaryDatabase`.`Drugs` (`DrugID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`DispensedDrugs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`DispensedDrugs` (
  `TradeID` INT NOT NULL AUTO_INCREMENT,
  `PrescriptionID` INT NOT NULL,
  `DrugID` INT NOT NULL,
  `Price` INT NOT NULL,
  `Quantity` INT NOT NULL,
  `PharmacistID` INT NOT NULL,
  PRIMARY KEY (`TradeID`),
  INDEX `dipfk1_idx` (`PharmacistID` ASC) VISIBLE,
  INDEX `dipfk2_idx` (`DrugID` ASC) INVISIBLE,
  INDEX `dipfk3_idx` (`PrescriptionID` ASC) VISIBLE,
  CONSTRAINT `dipfk1`
    FOREIGN KEY (`PharmacistID`)
    REFERENCES `DrugDispensaryDatabase`.`Pharmacists` (`PharmacistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `dipfk2`
    FOREIGN KEY (`DrugID`)
    REFERENCES `DrugDispensaryDatabase`.`Drugs` (`DrugID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `dipfk3`
    FOREIGN KEY (`PrescriptionID`)
    REFERENCES `DrugDispensaryDatabase`.`Prescriptions` (`PrescriptionID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Contracts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Contracts` (
  `ContractID` INT NOT NULL AUTO_INCREMENT,
  `Supervisor` VARCHAR(45) NOT NULL,
  `PharmacyID` INT NOT NULL,
  `StartDate` DATE NOT NULL,
  `ContractText` VARCHAR(45) NOT NULL,
  `EndDate` DATE NOT NULL,
  `PCID` INT NOT NULL,
  INDEX `cfk1_idx` (`PharmacyID` ASC) VISIBLE,
  INDEX `cfk2_idx` (`PCID` ASC) VISIBLE,
  PRIMARY KEY (`ContractID`),
  CONSTRAINT `cfk1`
    FOREIGN KEY (`PharmacyID`)
    REFERENCES `DrugDispensaryDatabase`.`Pharmacists` (`PharmacistID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `cfk2`
    FOREIGN KEY (`PCID`)
    REFERENCES `DrugDispensaryDatabase`.`PharmaceuticalCompanies` (`PCID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DrugDispensaryDatabase`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DrugDispensaryDatabase`.`Admin` (
  `AdminID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`AdminID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
