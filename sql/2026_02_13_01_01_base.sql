-- Active: 1771004203608@@127.0.0.1@3306@Echange

INSERT INTO user (nomUser, prenomUser, motDePasseUser) VALUES
('Dupont', 'Jean', 'password123'),
('Martin', 'Sophie', 'pass456'),
('Durand', 'Pierre', 'mypassword'),
('Lefevre', 'Marie', 'securepass'),
('Moreau', 'Luc', '12345678');

INSERT INTO objet (nomObjet, idCategorie, idProprietaire, descriptionObjet) VALUES
('Vélo', 1, 1, 'Un vélo de montagne en bon état.'),
('Table', 2, 2, 'Une table en bois massif.'),
('Chaise', 2, 3, 'Une chaise confortable.'),
('Ordinateur portable', 3, 4, 'Un ordinateur portable de marque XYZ.'),
('Télévision', 3, 5, 'Une télévision à écran plat de 50 pouces.');

INSERT INTO categorie (nomCategorie) VALUES
('Sport'),
('Meubles'),
('Électronique');

INSERT INTO echange (idObjetOffert, idObjetDemande, idStatut, dateEchange) VALUES
(1, 2, 1, '2024-01-15'),
(3, 4, 2, '2024-01-20'),
(5, 1, 3, '2024-01-25');

CREATE TABLE historiqueAppartenance(
    idHistorique INT PRIMARY KEY AUTO_INCREMENT,
    idObjet INT,
    idUser INT,
    idEchange INT,
    datePerte DATETIME,
);

INSERT INTO historiqueAppartenance (idObjet, idUser, idEchange, datePerte) VALUES
(1, 1, 1, '2024-01-15 10:00:00'),
(2, 2, 1, '2024-01-15 10:00:00'),
(3, 3, 2, '2024-01-20 14:30:00'),
(4, 4, 2, '2024-01-20 14:30:00'),
(5, 5, 3, '2024-01-25 09:45:00');

