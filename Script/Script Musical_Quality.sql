CREATE DATABASE Musical_Quality DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE Musical_Quality;

CREATE TABLE Registro (
    Id_Registro INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(255) NULL,
    Apellido VARCHAR(255) NULL,
    Edad INT,
    Email VARCHAR(255) NULL,
    Contraseña BLOB NULL,
    PRIMARY KEY (Id_Registro)
);

CREATE TABLE Login (
    Id_Login INT NOT NULL AUTO_INCREMENT,
    Email VARCHAR(255) NULL,
    Contraseña BLOB NULL,
    PRIMARY KEY (Id_Login)
);

CREATE TABLE Musica (
    Id_Musica INT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(255) NULL,
    Artista VARCHAR(255) NULL,
    Genero VARCHAR(255) NULL,
    Album VARCHAR(255) NULL,
    Caratula LONGBLOB,
    Audio LONGBLOB,
    Link_Compra LONGTEXT,
    PRIMARY KEY (Id_Musica)
);

CREATE TABLE Lista_De_Reproduccion (
    Id_Lista_De_Reproduccion INT NOT NULL AUTO_INCREMENT,
    Nombre_Lista VARCHAR(255) NULL,
    PRIMARY KEY (Id_Lista_De_Reproduccion)
);
