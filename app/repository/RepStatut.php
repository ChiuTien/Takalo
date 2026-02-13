<?php 
    namespace app\repository;

    use app\models\Statut;
    use Flight;
    use PDO;

    class RepStatut {
        //Attribut
        private PDO $db;

        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }

        //Methodes
        public function ajouterStatut(Statut $statut) : void{
            try {
                $valStatut = $statut->getValStatut();
                $sql = "INSERT INTO statut(valStatut) VALUES (:valStatut)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':valStatut', $valStatut, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function supprimerStatut(int $id): void{
            try {
                $sql = "DELETE FROM statut WHERE idStatut = :idStatut";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idStatut', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function modifierStatut(Statut $statut) : void{
            try {
                $idStatut = $statut->getIdStatut();
                $valStatut = $statut->getValStatut();
                $sql = "UPDATE statut SET valStatut = :valStatut WHERE idStatut = :idStatut";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':valStatut', $valStatut, PDO::PARAM_STR);
                $stmt->bindValue(':idStatut', $idStatut, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function getStatutById(int $idStatut): Statut {
            $statut = new Statut();
            try {
                $sql = "SELECT * FROM statut WHERE idStatut = :idStatut";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idStatut', $idStatut, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {
                    $statut->setIdStatut($data['idStatut']);
                    $statut->setValStatut($data['valStatut']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $statut;
        }
        public function getAllStatut(): array {
            $statuts = [];
            try {
                $sql = "SELECT * FROM statut";
                $stmt = $this->db->query($sql);
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $statut = new Statut();
                    $statut->setIdStatut($data['idStatut']);
                    $statut->setValStatut($data['valStatut']);
                    $statuts[] = $statut;
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $statuts;
        }
    }

?>