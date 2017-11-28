CREATE DATABASE Musical_Quality DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE Musical_Quality;

CREATE TABLE IF NOT EXISTS `musical_quality`.`registro` (
  `idRegistro` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `apellido` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `edad` INT(11) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `contraseña` BLOB NULL DEFAULT NULL COMMENT '',
  `loginIdLogin` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idRegistro`)  COMMENT '',
  INDEX `fk_registro_login1_idx` (`loginIdLogin` ASC)  COMMENT '',
  CONSTRAINT `fk_registro_login1`
    FOREIGN KEY (`loginIdLogin`)
    REFERENCES `musical_quality`.`login` (`idLogin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`login` (
  `idLogin` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `contraseña` BLOB NULL DEFAULT NULL COMMENT '',
  `usuarioIdUsuario` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`idLogin`)  COMMENT '',
  INDEX `fk_login_usuario1_idx` (`usuarioIdUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_login_usuario1`
    FOREIGN KEY (`usuarioIdUsuario`)
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
  `idListaDeReproduccion` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombreLista` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `usuarioIdUsuario` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idListaDeReproduccion`)  COMMENT '',
  INDEX `fk_lista_de_reproduccion_Usuario1_idx` (`UsuarioIdUsuario` ASC)  COMMENT '',
  CONSTRAINT `fk_lista_de_reproduccion_Usuario1`
    FOREIGN KEY (`UsuarioIdUsuario`)
    REFERENCES `musical_quality`.`Usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `musical_quality`.`Generos` (
  `idGeneros` INT not NULL COMMENT '',
  `genero` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`idGeneros`)  COMMENT '')
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `musical_quality`.`musica` (
  `idMusica` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `artista` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `album` VARCHAR(255) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `caratula` LONGBLOB NULL DEFAULT NULL COMMENT '',
  `audio` LONGBLOB NULL DEFAULT NULL COMMENT '',
  `linkCompra` LONGTEXT CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NULL DEFAULT NULL COMMENT '',
  `listaDeReproduccionIdListaDeReproduccion` INT(11) NOT NULL COMMENT '',
  `generosIdGeneros` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idMusica`)  COMMENT '',
  INDEX `fk_musica_lista_de_reproduccion1_idx` (`listaDeReproduccionIdListaDeReproduccion` ASC)  COMMENT '',
  INDEX `fk_musica_Generos1_idx` (`generosIdGeneros` ASC)  COMMENT '',
  CONSTRAINT `fk_musica_lista_de_reproduccion1`
    FOREIGN KEY (`listaDeReproduccionIdListaDeReproduccion`)
    REFERENCES `musical_quality`.`lista_de_reproduccion` (`IdListaDeReproduccion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_musica_Generos1`
    FOREIGN KEY (`generosIdGeneros`)
    REFERENCES `musical_quality`.`generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_unicode_ci;
