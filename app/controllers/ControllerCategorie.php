<?php 
namespace app\controllers;

use app\models\Categorie;
use app\repository\RepCategorie;

class CategorieController {
    private RepCategorie $repCategorie;

    public function __construct() {
        $this->repCategorie = new RepCategorie();
    }

    public function addCategorie(Categorie $categorie): void {
            $this->repCategorie->ajouterCategorie($categorie);
    }

    public function deleteCategorie(int $id): void {
        $this->repCategorie->supprimerCategorie($id);
    }

    public function editCategorie(Categorie $categorie): void {
        $this->repCategorie->modifierCategorie($categorie);
    }

    public function listCategorie(): array {
        return $this->repCategorie->getAllCategories();
    }

    public function getCategorieById(int $id): Categorie {
        return $this->repCategorie->getCategorieById($id);
    }
}

?>