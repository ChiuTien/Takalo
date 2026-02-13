<?php 
    namespace app\repository;
    
    use app\models\Categorie;
    use Flight;
    use PDO;    

    class RepCategorie {
        //Attribut
         private PDO $db;
        //Constructeur
            public function __construct(){
                $this->db = Flight::db();
            }
        //Methodes
            public function ajouterCategorie(Categorie $categorie) : void{
                try {
                    $valCategorie= $categorie->getValCategorie();
                    $sql = "INSERT INTO categorie(valCategorie) VALUES (:valCategorie)";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':valCategorie', $valCategorie, PDO::PARAM_STR );
                    $stmt->execute();

                } catch (\Throwable $th) {
                    throw $th;
                }
            }
            public function supprimerCategorie(int $id): void{
                try {
                    $sql = "DELETE FROM categorie WHERE idCategorie =: idCategorie";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':idCategorie', $id, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (\Throwable $th) {
                    throw $th;
                }
            }
            public function modifierCategorie(Categorie $categorie) : void{
                try {
                    $idCategorie = $categorie->getIdCategorie();
                    $valCategorie = $categorie->getValCategorie();
                    $sql = "UPDATE categorie SET valCategorie = :valCategorie WHERE idCategorie = :idCategorie";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':valCategorie', $valCategorie, PDO::PARAM_STR);
                    $stmt->bindValue(':idCategorie', $idCategorie, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (\Throwable $th) {
                throw $th;
                }
            }
            public function getCategorieById(int $idCategorie): Categorie{
                $categorie = new Categorie();
                try {
                    $sql = "SELECT * FROM categorie WHERE idCategorie = :idCategorie";
                    $stmt = $this->db->prepare($sql);
                    $stmt->bindValue(':idCategorie', $idCategorie, PDO::PARAM_INT);
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($data) {
                        $categorie->setIdCategorie($data['idCategorie']);
                        $categorie->setValCategorie($data['valCategorie']);
                    }
                } catch (\Throwable $th) {
                    throw $th;
                }
                return $categorie;
            }
            public function getAllCategories() : array{
                try {
                    $sql = "SELECT * FROM categorie";
                    $stmt = $this->db->query($sql);
                    $categories = [];
                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $categorie = new Categorie();
                        $categorie->setIdCategorie($data['idCategorie']);
                        $categorie->setValCategorie($data['valCategorie']);
                        $categories[] = $categorie;
                    }
                    return $categories;
                } catch (\Throwable $th) {
                    throw $th;
                }
            }
    }
?>