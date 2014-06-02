DROP DATABASE IF EXISTS clinica;
CREATE DATABASE clinica;
USE clinica;

CREATE TABLE paziente (
    nome VARCHAR(40) NOT NULL,
    cognome VARCHAR(40) NOT NULL,
    sesso VARCHAR(10) NOT NULL,
    comune VARCHAR(40) NOT NULL,
    dataNascita VARCHAR(40) NOT NULL,
    email VARCHAR(40) NOT NULL,
    username VARCHAR(40) NOT NULL,
    password VARCHAR(40) NOT NULL,
    codiceFiscale CHAR (16) NOT NULL,
    telefono VARCHAR(40) NOT NULL,
    PRIMARY KEY (username)
)ENGINE=InnoDB DEFAULT CHARSET=latin1 ;


