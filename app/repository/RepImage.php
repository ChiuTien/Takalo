<?php 
    namespace app\repository;

    use app\models\Image;
    use Flight;
    use PDO;

    class RepImage{
        //Attribut
        private PDO $db;

        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }
        //Methodes
        public function addImage(Image $image): void{
            try {
                $idObjet = $image->getIdObjet();
                $urlImage = $image->getUrlImage();
                $sql = "INSERT INTO image(idObjet, urlImage) VALUES (:idObjet, :urlImage)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idObjet', $idObjet, PDO::PARAM_INT);
                $stmt->bindParam(':urlImage', $urlImage, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;

            }

        }
        public function deleteImage(int $idImage): void{
            try {
                $sql = "DELETE FROM image WHERE idImage = :idImage";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idImage', $idImage, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function modifierImage(Image $image): void{
            try {
                $idImage = $image->getIdImage();
                $idObjet = $image->getIdObjet();
                $urlImage = $image->getUrlImage();
                $sql = "UPDATE image SET idObjet = :idObjet, urlImage = :urlImage WHERE idImage = :idImage";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idImage', $idImage, PDO::PARAM_INT);
                $stmt->bindParam(':idObjet', $idObjet, PDO::PARAM_INT);
                $stmt->bindParam(':urlImage', $urlImage, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }  
        public function getImageById(int $idImage): Image {
            $image = new Image();
            try {
                $sql = "SELECT * FROM image WHERE idImage = :idImage";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idImage', $idImage, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {
                    $image->setIdImage($data['idImage']);
                    $image->setIdObjet($data['idObjet']);
                    $image->setUrlImage($data['urlImage']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $image;
        }
        public function getAllImage():array{
            try {
                $sql = "SELECT * FROM image";
                $stmt = $this->db->query($sql);
                $images = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $image = new Image();
                    $image->setIdImage($data['idImage']);
                    $image->setIdObjet($data['idObjet']);
                    $image->setUrlImage($data['urlImage']);
                    $images[] = $image;
                }
               
            } catch (\Throwable $th) {
                //throw $th;
            }
             return $images;
        }
    }

?>