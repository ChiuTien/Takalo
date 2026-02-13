<?php
namespace app\controllers;
use app\models\Categorie;
use app\models\Objet;
use app\repository\RepObjet;

class ControllerObjet {
    private RepObjet $repObjet;

    public function __construct() {
        $this->repObjet = new RepObjet();
    }

    public function addObjet(Objet $objet): void {
        $this->repObjet->addObjet($objet);
    }

    public function deleteObjet(int $id): void {
        $this->repObjet->deleteObjet($id);
    }

    public function editObjet(Objet $objet): void {
        $this->repObjet->modifierObjet($objet);
    }

    public function listObjet(): array {
        return $this->repObjet->getAllObjet();
    }

    public function getObjetById(int $id): Objet {
        return $this->repObjet->getObjetById($id);
    }
    public function getObjetByCategorie(Categorie $categorie): array {
        return $this->repObjet->getObjetByCategorie($categorie);
    }
    //Misy tsy vo commit

    //Angalana anle historique appartenance anle objet
    public function getHistoriqueAppartenanceByObjet(int $idObjet): array {
        return $this->repObjet->getHistoriqueAppartenanceById($idObjet);
    }
}

?>
