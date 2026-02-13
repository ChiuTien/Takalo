<?php
namespace app\controllers;

use app\models\Image;
use app\repository\RepImage;

class ImageController {
    private RepImage $repImage;

    public function __construct() {
        $this->repImage = new RepImage();
    }

    public function addImage(Image $image): void {
        $this->repImage->addImage($image);
    }

    public function deleteImage(int $id): void {
        $this->repImage->deleteImage($id);
    }

    public function editImage(Image $image): void {
        $this->repImage->modifierImage($image);
    }

    public function listImage(): array {
        return $this->repImage->getAllImage();
    }

    public function getImageById(int $id): Image {
        return $this->repImage->getImageById($id);
    }
}

?>
