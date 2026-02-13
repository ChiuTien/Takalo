<?php 
    namespace app\repository;

    use app\models\HistoriqueAppartenance;
    use app\models\Objet;
    use app\models\User;
    use app\models\Categorie;
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
                $stmt->bindValue(':idProprietaire', $objet->getProprietaire(), PDO::PARAM_INT);
                $stmt->bindValue(':idCategorie', $objet->getCategorie(), PDO::PARAM_INT);
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
                $idProprietaire = $objet->getProprietaire();
                $idCategorie = $objet->getCategorie();
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
                    $objet->setProprietaire($data['idProprietaire']);
                    $objet->setCategorie($data['idCategorie']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $objet;
        }
        public function getAllObjet(): array{
            try {
                $sql = "SELECT * FROM viewObjet";
                $stmt = $this->db->query($sql);
                $objets = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $objet = new Objet();
                    $objet->setIdObjet($data['idObjet']);
                    $objet->setNomObjet($data['nomObjet']);
                    // $objet->setIdProprietaire($data['idProprietaire']);
                    // $objet->setIdCategorie($data['idCategorie']);
                    $objet->setDescriptionObjet($data['descriptionObjet']);

                    $user = new User();
                    $user->setNomUser($data['nomUser']);
                    $user->setPrenomUser($data['prenomUser']);

                    $objet->setProprietaire($user);

                    $categorie = new Categorie();
                    $categorie->setNomCategorie($data['nomCategorie']);
                    $objet->setCategorie($categorie);

                    $objets[] = $objet;
                }
                
            } catch (\Throwable $th) {
                throw $th;
            }
            return $objets;
        }

        //Fonction permettant de recuperer l'historique d'appartenance d'un objet 
        public function getHistoriqueAppartenanceById(int $idObjet): array{
            try {
                $sql = "SELECT * FROM HistoriqueAppartenance WHERE idObjet = :idObjet ORDER BY dateDebut DESC";
                $stmt = $this->db->query($sql);
                $stmt->bindValue(':idObjet', $idObjet, PDO::PARAM_INT);
                $stmt->execute();
                $historique = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                    $hA = new HistoriqueAppartenance();
                    $hA->setIdHistorique($data['idHistorique']);
                    $hA->setDate($data['date']);
                    $hA->setHeure($data['heure']);
                    $hA->setIdProprietaire($data['idProprietaire']);
                    $hA->setIdEchange($data['idEchange']);
                    $hA->setIdObjet($data['idObjet']);

                    $historique[] = $hA;
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $historique;
        }
    }


?>