<?php 
    namespace app\repository;

    use app\models\Objet;
    use Flight;
    use PDO;

    class RepObjet {
        //Attribut
        private PDO $db;
        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }
        //Methodes
        public function addObjet(Objet $objet): void{
            try {
                $sql = "INSERT INTO objet (nomObjet, idProprietaire, idCategorie) VALUES (:nomObjet, :idProprietaire, :idCategorie)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':nomObjet', $objet->getNomObjet(), PDO::PARAM_STR);
                $stmt->bindValue(':idProprietaire', $objet->getIdProprietaire(), PDO::PARAM_INT);
                $stmt->bindValue(':idCategorie', $objet->getIdCategorie(), PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function deleteObjet(int $id): void{
            try {
                $sql = "DELETE FROM objet WHERE idObjet = :idObjet";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idObjet', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function modifierObjet(Objet $objet):void{
            try {
                $nomObjet = $objet->getNomObjet();
                $idProprietaire = $objet->getIdProprietaire();
                $idCategorie = $objet->getIdCategorie();
                $idObjet = $objet->getIdObjet();

                $sql = "UPDATE objet SET nomObjet = :nomObjet, idProprietaire = :idProprietaire, idCategorie = :idCategorie WHERE idObjet = :idObjet";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':nomObjet', $nomObjet, PDO::PARAM_STR);
                $stmt->bindValue(':idProprietaire', $idProprietaire, PDO::PARAM_INT);
                $stmt->bindValue(':idCategorie', $idCategorie, PDO::PARAM_INT);
                $stmt->bindValue(':idObjet', $idObjet, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function getObjetById(int $idObjet): Objet{
            $objet = new Objet();
            try {
                $sql = "SELECT * FROM objet WHERE idObjet = :idObjet";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idObjet', $idObjet, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {
                    $objet->setIdObjet($data['idObjet']);
                    $objet->setNomObjet($data['nomObjet']);
                    $objet->setIdProprietaire($data['idProprietaire']);
                    $objet->setIdCategorie($data['idCategorie']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $objet;
        }
        public function getAllObjet(): array{
            try {
                $sql = "SELECT * FROM objet";
                $stmt = $this->db->query($sql);
                $objets = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $objet = new Objet();
                    $objet->setIdObjet($data['idObjet']);
                    $objet->setNomObjet($data['nomObjet']);
                    $objet->setIdProprietaire($data['idProprietaire']);
                    $objet->setIdCategorie($data['idCategorie']);
                    $objets[] = $objet;
                }
                
            } catch (\Throwable $th) {
                throw $th;
            }
            return $objets;
        }

    }


?>