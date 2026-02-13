<?php 
    namespace app\repository;

    use app\models\Echange;
    use Flight;
    use PDO;

    class RepEchange {
        //Attribut 
        private PDO $db;
        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }
        //Methodes 
        public function addEchange(Echange $echange): void{
            try {
                $idObjetOffert = $echange->getIdObjetOffert();
                $idObjetDemande = $echange->getIdObjetDemande();
                $idStatut = $echange->getIdStatut();
                $dateEchange = $echange->getDateEchange();
                $sql = "INSERT INTO echange(idObjetOffert, idObjetDemande, idStatut, dateEchange) VALUES (:idObjetOffert, :idObjetDemande, :idStatut, :dateEchange)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idObjetOffert', $idObjetOffert);
                $stmt->bindParam(':idObjetDemande', $idObjetDemande);
                $stmt->bindParam(':idStatut', $idStatut);
                $stmt->bindParam(':dateEchange', $dateEchange);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function deleteEchange(int $idEchange): void{
            try {
                $sql = "DELETE FROM echange WHERE idEchange = :idEchange";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idEchange', $idEchange);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function modifierEchange(Echange $echange): void{
            try {
                $idEchange = $echange->getIdEchange();
                $idObjetOffert = $echange->getIdObjetOffert();
                $idObjetDemande = $echange->getIdObjetDemande();
                $idStatut = $echange->getIdStatut();
                $dateEchange = $echange->getDateEchange();
                $sql = "UPDATE echange SET idObjetOffert = :idObjetOffert, idObjetDemande = :idObjetDemande, idStatut = :idStatut, dateEchange = :dateEchange WHERE idEchange = :idEchange";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idEchange', $idEchange);
                $stmt->bindParam(':idObjetOffert', $idObjetOffert);
                $stmt->bindParam(':idObjetDemande', $idObjetDemande);
                $stmt->bindParam(':idStatut', $idStatut);
                $stmt->bindParam(':dateEchange', $dateEchange);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function getEchangeById(int $idEchange): Echange{
            $echange = new Echange();
            try {
                $sql = "SELECT * FROM echange WHERE idEchange = :idEchange";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':idEchange', $idEchange);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {
                    $echange->setIdEchange($data['idEchange']);
                    $echange->setIdObjetOffert($data['idObjetOffert']);
                    $echange->setIdObjetDemande($data['idObjetDemande']);
                    $echange->setIdStatut($data['idStatut']);
                    $echange->setDateEchange($data['dateEchange']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $echange;
        }
        public function getAllEchange(): array{
            try {
                $sql = "SELECT * FROM echange";
                $stmt = $this->db->query($sql);
                $echanges = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $echange = new Echange();
                    $echange->setIdEchange($data['idEchange']);
                    $echange->setIdObjetOffert($data['idObjetOffert']);
                    $echange->setIdObjetDemande($data['idObjetDemande']);
                    $echange->setIdStatut($data['idStatut']);
                    $echange->setDateEchange($data['dateEchange']);
                    $echanges[] = $echange;
                }
               
            } catch (\Throwable $th) {
                throw $th;
            }
             return $echanges;
        }

    }
?>