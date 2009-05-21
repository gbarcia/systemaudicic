SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `sys_udicic` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `sys_udicic`;

-- -----------------------------------------------------
-- Table `sys_udicic`.`CLIENTE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`CLIENTE` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`CLIENTE` (
  `rif` VARCHAR(20) NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `clave` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(45) NOT NULL ,
  `direccion` VARCHAR(45) NOT NULL ,
  `descripcion` MEDIUMTEXT NULL ,
  PRIMARY KEY (`rif`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sys_udicic`.`PROYECTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`PROYECTO` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`PROYECTO` (
  `idProyecto` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `estadoActual` VARCHAR(1) NOT NULL ,
  `descripcion` MEDIUMTEXT NULL ,
  `CLIENTE_rif` VARCHAR(20) NULL ,
  PRIMARY KEY (`idProyecto`) ,
  CONSTRAINT `fk_PROYECTO_CLIENTE`
    FOREIGN KEY (`CLIENTE_rif` )
    REFERENCES `sys_udicic`.`CLIENTE` (`rif` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PROYECTO_CLIENTE` ON `sys_udicic`.`PROYECTO` (`CLIENTE_rif` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`REUNION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`REUNION` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`REUNION` (
  `idReunion` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fecha` DATE NOT NULL ,
  `hora` VARCHAR(45) NOT NULL ,
  `detalles` MEDIUMTEXT NULL ,
  `PROYECTO_idProyecto` INT NULL ,
  PRIMARY KEY (`idReunion`) ,
  CONSTRAINT `fk_REUNION_PROYECTO`
    FOREIGN KEY (`PROYECTO_idProyecto` )
    REFERENCES `sys_udicic`.`PROYECTO` (`idProyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_REUNION_PROYECTO` ON `sys_udicic`.`REUNION` (`PROYECTO_idProyecto` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`INVENTARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`INVENTARIO` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`INVENTARIO` (
  `idInventario` INT NOT NULL AUTO_INCREMENT ,
  `fechaEntrada` DATE NOT NULL ,
  `fechaSalida` DATE NULL ,
  `PROYECTO_idProyecto` INT NULL ,
  PRIMARY KEY (`idInventario`) ,
  CONSTRAINT `fk_INVENTARIO_PROYECTO`
    FOREIGN KEY (`PROYECTO_idProyecto` )
    REFERENCES `sys_udicic`.`PROYECTO` (`idProyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_INVENTARIO_PROYECTO` ON `sys_udicic`.`INVENTARIO` (`PROYECTO_idProyecto` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`ITEM`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`ITEM` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`ITEM` (
  `idItem` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` MEDIUMTEXT NOT NULL ,
  `numeroTomo` INT NOT NULL ,
  `cantidadPaginas` INT NOT NULL ,
  `INVENTARIO_idInventario` INT NULL ,
  PRIMARY KEY (`idItem`) ,
  CONSTRAINT `fk_ITEM_INVENTARIO`
    FOREIGN KEY (`INVENTARIO_idInventario` )
    REFERENCES `sys_udicic`.`INVENTARIO` (`idInventario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_ITEM_INVENTARIO` ON `sys_udicic`.`ITEM` (`INVENTARIO_idInventario` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`USUARIO` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`USUARIO` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `clave` VARCHAR(45) NOT NULL ,
  `rol` VARCHAR(1) NOT NULL ,
  PRIMARY KEY (`idUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sys_udicic`.`PROYECTO_has_USUARIO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`PROYECTO_has_USUARIO` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`PROYECTO_has_USUARIO` (
  `PROYECTO_idProyecto` INT NOT NULL ,
  `USUARIO_idUsuario` INT NOT NULL ,
  PRIMARY KEY (`PROYECTO_idProyecto`, `USUARIO_idUsuario`) ,
  CONSTRAINT `fk_PROYECTO_has_USUARIO_PROYECTO`
    FOREIGN KEY (`PROYECTO_idProyecto` )
    REFERENCES `sys_udicic`.`PROYECTO` (`idProyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PROYECTO_has_USUARIO_USUARIO`
    FOREIGN KEY (`USUARIO_idUsuario` )
    REFERENCES `sys_udicic`.`USUARIO` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PROYECTO_has_USUARIO_PROYECTO` ON `sys_udicic`.`PROYECTO_has_USUARIO` (`PROYECTO_idProyecto` ASC) ;

CREATE INDEX `fk_PROYECTO_has_USUARIO_USUARIO` ON `sys_udicic`.`PROYECTO_has_USUARIO` (`USUARIO_idUsuario` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`TAREA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`TAREA` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`TAREA` (
  `idTarea` INT NOT NULL ,
  `fechaLimite` DATE NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `prioridad` VARCHAR(45) NOT NULL ,
  `completada` TINYINT(1) NOT NULL ,
  `descripcion` VARCHAR(45) NULL ,
  `USUARIO_idUsuario` INT NULL ,
  PRIMARY KEY (`idTarea`) ,
  CONSTRAINT `fk_TAREA_USUARIO`
    FOREIGN KEY (`USUARIO_idUsuario` )
    REFERENCES `sys_udicic`.`USUARIO` (`idUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_TAREA_USUARIO` ON `sys_udicic`.`TAREA` (`USUARIO_idUsuario` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`TAREA_has_TAREA`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`TAREA_has_TAREA` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`TAREA_has_TAREA` (
  `TAREA_idTareaPRELA` INT NOT NULL ,
  `TAREA_idTareaPRELADA` INT NOT NULL ,
  PRIMARY KEY (`TAREA_idTareaPRELA`, `TAREA_idTareaPRELADA`) ,
  CONSTRAINT `fk_TAREA_has_TAREA_TAREA`
    FOREIGN KEY (`TAREA_idTareaPRELA` )
    REFERENCES `sys_udicic`.`TAREA` (`idTarea` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TAREA_has_TAREA_TAREA1`
    FOREIGN KEY (`TAREA_idTareaPRELADA` )
    REFERENCES `sys_udicic`.`TAREA` (`idTarea` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_TAREA_has_TAREA_TAREA` ON `sys_udicic`.`TAREA_has_TAREA` (`TAREA_idTareaPRELA` ASC) ;

CREATE INDEX `fk_TAREA_has_TAREA_TAREA1` ON `sys_udicic`.`TAREA_has_TAREA` (`TAREA_idTareaPRELADA` ASC) ;


-- -----------------------------------------------------
-- Table `sys_udicic`.`COSTO`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sys_udicic`.`COSTO` ;

CREATE  TABLE IF NOT EXISTS `sys_udicic`.`COSTO` (
  `id` INT NOT NULL ,
  `monto` FLOAT NOT NULL ,
  `tipo` VARCHAR(1) NOT NULL ,
  `PROYECTO_idProyecto` INT NULL ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_COSTO_PROYECTO`
    FOREIGN KEY (`PROYECTO_idProyecto` )
    REFERENCES `sys_udicic`.`PROYECTO` (`idProyecto` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_COSTO_PROYECTO` ON `sys_udicic`.`COSTO` (`PROYECTO_idProyecto` ASC) ;



-- -----------------------------------------------------
-- Data for table `sys_udicic`.`REUNION`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `REUNION` (`idReunion`, `fecha`, `hora`, `detalles`, `PROYECTO_idProyecto`) VALUES (1, '2009-01-01', '3:00 PM', NULL, 1);
INSERT INTO `REUNION` (`idReunion`, `fecha`, `hora`, `detalles`, `PROYECTO_idProyecto`) VALUES (2, '2009-02-15', '9:00 AM', 'Fijacion detalles procesos', 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`INVENTARIO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `INVENTARIO` (`idInventario`, `fechaEntrada`, `fechaSalida`, `PROYECTO_idProyecto`) VALUES (1, '2009-05-15', NULL, 1);
INSERT INTO `INVENTARIO` (`idInventario`, `fechaEntrada`, `fechaSalida`, `PROYECTO_idProyecto`) VALUES (2, '2009-04-30', '2009-05-15', 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`ITEM`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `ITEM` (`idItem`, `descripcion`, `numeroTomo`, `cantidadPaginas`, `INVENTARIO_idInventario`) VALUES (1, "Libro", 1, 20, 1);
INSERT INTO `ITEM` (`idItem`, `descripcion`, `numeroTomo`, `cantidadPaginas`, `INVENTARIO_idInventario`) VALUES (2, "Periodico", 1, 200, 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`USUARIO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `USUARIO` (`idUsuario`, `nombre`, `apellido`, `clave`, `rol`) VALUES (1, 'Eliana', 'Da Silva', '1234', 'A');
INSERT INTO `USUARIO` (`idUsuario`, `nombre`, `apellido`, `clave`, `rol`) VALUES (2, 'Gerardo', 'Barcia', '12345', 'R');

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`PROYECTO_has_USUARIO`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `PROYECTO_has_USUARIO` (`PROYECTO_idProyecto`, `USUARIO_idUsuario`) VALUES (1, 1);
INSERT INTO `PROYECTO_has_USUARIO` (`PROYECTO_idProyecto`, `USUARIO_idUsuario`) VALUES (1, 2);
INSERT INTO `PROYECTO_has_USUARIO` (`PROYECTO_idProyecto`, `USUARIO_idUsuario`) VALUES (2, 1);
INSERT INTO `PROYECTO_has_USUARIO` (`PROYECTO_idProyecto`, `USUARIO_idUsuario`) VALUES (2, 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`TAREA`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `TAREA` (`idTarea`, `fechaLimite`, `nombre`, `prioridad`, `completada`, `descripcion`, `USUARIO_idUsuario`) VALUES (1, '2009-05-25', 'Revisar material', 'A', 0, 'Completar revision material', 1);
INSERT INTO `TAREA` (`idTarea`, `fechaLimite`, `nombre`, `prioridad`, `completada`, `descripcion`, `USUARIO_idUsuario`) VALUES (2, '2009-05-30', 'Digitalizar tomo 1', 'M', 0, 'Comenzar digitalizacion', 2);

COMMIT;

-- -----------------------------------------------------
-- Data for table `sys_udicic`.`TAREA_has_TAREA`
-- -----------------------------------------------------
SET AUTOCOMMIT=0;
INSERT INTO `TAREA_has_TAREA` (`TAREA_idTareaPRELA`, `TAREA_idTareaPRELADA`) VALUES (1, 2);

COMMIT;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
