<?php
namespace app\controllers;

use app\models\Objet;
use app\repository\RepObjet;

class ObjetController {
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
}

?>
