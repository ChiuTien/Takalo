<?php 
    namespace app\repository;

    use app\models\Echange;
    use app\models\HistoriqueAppartenance;
    use PDO;
    use Flight;

    class RepHistoriqueAppart {
        //Attribut
        private PDO $db;
        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }
        //Methodes
        public function addHistoriqueAppartenance(HistoriqueAppartenance $historique): void{
            try {
                $sql = "INSERT INTO historique_appartenance (idObjet, idProprietaire, idEchange, date, heure) VALUES (:idObjet, :idProprietaire, :idEchange, :date, :heure)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idObjet', $historique->getIdObjet(), PDO::PARAM_INT);
                $stmt->bindValue(':idProprietaire', $historique->getIdProprietaire(), PDO::PARAM_INT);
                $stmt->bindValue(':idEchange', $historique->getIdEchange(), PDO::PARAM_INT);
                $stmt->bindValue(':date', $historique->getDate(), PDO::PARAM_STR);
                $stmt->bindValue(':heure', $historique->getHeure(), PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function removeHistoriqueAppartenance(HistoriqueAppartenance $historique): void{
            try {
                $sql = "DELETE FROM historique_appartenance WHERE idHistorique = :idHistorique";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idHistorique', $historique->getIdHistorique(), PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function getHistoriqueAppartenanceById(int $idHistorique): HistoriqueAppartenance{
            $historique = new HistoriqueAppartenance();
            try {
                $sql = "SELECT * FROM historique_appartenance WHERE idHistorique = :idHistorique";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idHistorique', $idHistorique, PDO::PARAM_INT);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($result) {
                    $historique->setIdHistorique($result['idHistorique']);
                    $historique->setIdObjet($result['idObjet']);
                    $historique->setIdProprietaire($result['idProprietaire']);
                    $historique->setIdEchange($result['idEchange']);
                    $historique->setDate($result['date']);
                    $historique->setHeure($result['heure']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $historique;
        }

        public function updateHistoriqueAppartenance(HistoriqueAppartenance $historique): void{
            try {
                $sql = "UPDATE historique_appartenance SET idObjet = :idObjet, idProprietaire = :idProprietaire, idEchange = :idEchange, date = :date, heure = :heure WHERE idHistorique = :idHistorique";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idObjet', $historique->getIdObjet(), PDO::PARAM_INT);
                $stmt->bindValue(':idProprietaire', $historique->getIdProprietaire(), PDO::PARAM_INT);
                $stmt->bindValue(':idEchange', $historique->getIdEchange(), PDO::PARAM_INT);
                $stmt->bindValue(':date', $historique->getDate(), PDO::PARAM_STR);
                $stmt->bindValue(':heure', $historique->getHeure(), PDO::PARAM_STR);
                $stmt->bindValue(':idHistorique', $historique->getIdHistorique(), PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function getAllHistoriqueAppartenance(): array{
            $historiques = [];
            try {
                $sql = "SELECT * FROM historique_appartenance";
                $stmt = $this->db->query($sql);
                while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $historique = new HistoriqueAppartenance();
                    $historique->setIdHistorique($result['idHistorique']);
                    $historique->setIdObjet($result['idObjet']);
                    $historique->setIdProprietaire($result['idProprietaire']);
                    $historique->setIdEchange($result['idEchange']);
                    $historique->setDate($result['date']);
                    $historique->setHeure($result['heure']);
                    $historiques[] = $historique;
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $historiques;
        }
    }
?>