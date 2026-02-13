<?php 
namespace app\controllers;

use app\models\HistoriqueAppartenance;
use app\repository\RepHistoriqueAppart;

class ControllerHistoriqueAppart {
    private RepHistoriqueAppart $repHistoriqueAppart;
    //Constructeur
    public function __construct() {
        $this->repHistoriqueAppart = new RepHistoriqueAppart();
    }
    //CRUD
    //Methodes supplementaires
    public function addHistoriqueAppartenance($historique): void {
        $this->repHistoriqueAppart->addHistoriqueAppartenance($historique);
    }

    public function editHistoriqueApparty($historique): void {
        $this->repHistoriqueAppart->updateHistoriqueAppartenance($historique);
    }

    public function deleteHistoriqueAppartenance($historique): void {
        $this->repHistoriqueAppart->removeHistoriqueAppartenance($historique);
    }

    public function getById(int $id): HistoriqueAppartenance {
        return $this->repHistoriqueAppart->getHistoriqueAppartenanceById($id);
    }

    public function getAllHistoriqueApparties(): array {
        return $this->repHistoriqueAppart->getAllHistoriqueAppartenance();
    }
}
?>