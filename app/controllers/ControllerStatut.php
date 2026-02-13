<?php
namespace app\controllers;

use app\models\Statut;
use app\repository\RepStatut;

class StatutController {
    private RepStatut $repStatut;

    public function __construct() {
        $this->repStatut = new RepStatut();
    }

    public function addStatut(Statut $statut): void {
        $this->repStatut->ajouterStatut($statut);
    }

    public function deleteStatut(int $id): void {
        $this->repStatut->supprimerStatut($id);
    }

    public function editStatut(Statut $statut): void {
        $this->repStatut->modifierStatut($statut);
    }

    public function listStatut(): array {
        return $this->repStatut->getAllStatut();
    }

    public function getStatutById(int $id): Statut {
        return $this->repStatut->getStatutById($id);
    }
}

?>
