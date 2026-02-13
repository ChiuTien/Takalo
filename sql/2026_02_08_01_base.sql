CREATE DATABASE Echange;
USE Echange;
CREATE OR REPLACE TABLE user(
    idUser INT PRIMARY KEY AUTO_INCREMENT,
    nomUser VARCHAR(100),
    prenomUser VARCHAR(100),
    motDePasseUser VARCHAR(20)
);
CREATE OR REPLACE TABLE statut(
    idStatut INT PRIMARY KEY AUTO_INCREMENT,
    nomStatut VARCHAR(100)
);
CREATE OR REPLACE TABLE categorie(
    idCategorie INT PRIMARY KEY AUTO_INCREMENT,
    nomCategorie VARCHAR(100)
);
CREATE OR REPLACE TABLE image(
    idImage INT PRIMARY KEY AUTO_INCREMENT,
    idObjet INT,
    urlImage VARCHAR(255)
);
CREATE OR REPLACE TABLE objet(
    idObjet INT PRIMARY KEY AUTO_INCREMENT,
    nomObjet VARCHAR(100),
    idCategorie INT,
    idProprietaire INT,
    descriptionObjet TEXT
);
CREATE OR REPLACE TABLE echange(
    idEchange INT PRIMARY KEY AUTO_INCREMENT,
    idObjetOffert INT,
    idObjetDemande INT,
    idStatut INT,
    dateEchange DATE
);