CREATE DATABASE Musical_Quality DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE Musical_Quality;

CREATE TABLE IF NOT EXISTS `musical_quality`.`registro` (
  `Id_Registro` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Apellido` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Edad` INT(11) NULL DEFAULT NULL COMMENT '',
  `Email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Contraseña` BLOB NULL DEFAULT NULL COMMENT '',
  `login_Id_Login` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`Id_Registro`)  COMMENT '',
  INDEX `fk_registro_login1_idx` (`login_Id_Login` ASC)  COMMENT '',
  CONSTRAINT `fk_registro_login1`
    FOREIGN KEY (`login_Id_Login`)
    REFERENCES `musical_quality`.`login` (`Id_Login`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`login` (
  `Id_Login` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Contraseña` BLOB NULL DEFAULT NULL COMMENT '',
  `usuario_idUsuario` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`Id_Login`)  COMMENT '',
  INDEX `fk_login_usuario1_idx` (`usuario_idUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_login_usuario1`
    FOREIGN KEY (`usuario_idUsuario`)
    REFERENCES `musical_quality`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`usuario` (
  `idUsuario` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idUsuario`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`lista_de_reproduccion` (
  `Id_Lista_De_Reproduccion` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre_Lista` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Usuario_idUsuario` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Id_Lista_De_Reproduccion`)  COMMENT '',
  INDEX `fk_lista_de_reproduccion_Usuario1_idx` (`Usuario_idUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_lista_de_reproduccion_Usuario1`
    FOREIGN KEY (`Usuario_idUsuario`)
    REFERENCES `musical_quality`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`Generos` (
  `idGeneros` INT not NULL COMMENT '',
  `Genero` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idGeneros`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `musical_quality`.`musica` (
  `Id_Musica` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Artista` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Album` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `Caratula` LONGBLOB NULL DEFAULT NULL COMMENT '',
  `Audio` LONGBLOB NULL DEFAULT NULL COMMENT '',
  `Link_Compra` LONGTEXT CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `lista_de_reproduccion_Id_Lista_De_Reproduccion` INT(11) NOT NULL COMMENT '',
  `Generos_idGeneros` INT NOT NULL COMMENT '',
  PRIMARY KEY (`Id_Musica`)  COMMENT '',
  INDEX `fk_musica_lista_de_reproduccion1_idx` (`lista_de_reproduccion_Id_Lista_De_Reproduccion` ASC)  COMMENT '',
  INDEX `fk_musica_Generos1_idx` (`Generos_idGeneros` ASC)  COMMENT '',
  CONSTRAINT `fk_musica_lista_de_reproduccion1`
    FOREIGN KEY (`lista_de_reproduccion_Id_Lista_De_Reproduccion`)
    REFERENCES `musical_quality`.`lista_de_reproduccion` (`Id_Lista_De_Reproduccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_musica_Generos1`
    FOREIGN KEY (`Generos_idGeneros`)
    REFERENCES `musical_quality`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
