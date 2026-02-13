<?php 
namespace app\models;

class HistoriqueAppartenance {
    //Attributs
    private $idHistorique;
    private $idObjet;
    private $idProprietaire;
    private $idEchange;
    private $date;

    private $heure;
    //Constructeur
    public function __construct() {}
    //Setters
    public function setIdHistorique($id) {
        $this->idHistorique = $id;
    }
    public function setIdObjet($id) {
        $this->idObjet = $id;
    }
    public function setIdProprietaire($id) {
        $this->idProprietaire = $id;
    }
    public function setIdEchange($idEchange) {
        $this->idEchange = $idEchange;
    }
    public function setDate($date) {
        $this->date = $date;
    }
    public function setHeure($heure) {
        $this->heure = $heure;
    }
    public function getIdHistorique() {
        return $this->idHistorique;
    }
    public function getIdObjet() {
        return $this->idObjet;
    }
    public function getIdProprietaire() {
        return $this->idProprietaire;
    }
    public function getDate() {      
        return $this->date;
    }

    public function getIdEchange() {
        return $this->idEchange;
    }

    public function getHeure() {
        return $this->heure;
    }
};
?>