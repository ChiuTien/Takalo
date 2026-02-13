CREATE OR REPLACE VIEW viewObjet AS(
SELECT o.idObjet, o.nomObjet, c.idCategorie, u.idUser, o.descriptionObjet, c.nomCategorie, u.nomUser, u.prenomUser
FROM objet o
JOIN categorie c ON o.idCategorie = c.idCategorie
JOIN user u ON o.idProprietaire = u.idUser) ;