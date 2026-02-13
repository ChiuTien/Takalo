<?php
namespace app\controllers;

use app\models\Echange;
use app\repository\RepEchange;

class EchangeController {
    private RepEchange $repEchange;

    public function __construct() {
        $this->repEchange = new RepEchange();
    }

    public function addEchange(Echange $echange): void {
        $this->repEchange->addEchange($echange);
    }

    public function deleteEchange(int $id): void {
        $this->repEchange->deleteEchange($id);
    }

    public function editEchange(Echange $echange): void {
        $this->repEchange->modifierEchange($echange);
    }

    public function listEchange(): array {
        return $this->repEchange->getAllEchange();
    }

    public function getEchangeById(int $id): Echange {
        return $this->repEchange->getEchangeById($id);
    }
}

?>
