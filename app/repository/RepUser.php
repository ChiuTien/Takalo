<?php 
    namespace app\repository;

    use app\models\User;
    use Flight;
    use PDO;

    class RepUser{
        //Attribut
        private PDO $db;
        //Constructeur
        public function __construct() {
            $this->db = Flight::db();
        }
        //Methodes
        public function addUser(User $user) : void{
            try {
                $nom = $user->getNomUser();
                $prenom = $user->getPrenomUser();
                $mdp = $user->getMdpUser();
                $sql = "INSERT INTO users(nomUser, prenomUser, motDePasseUser) VALUES (:nom, :prenom, :mdp)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function deleteUser(int $id) : void{
            try {
                
                $sql = "DELETE FROM users WHERE idUser = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function updateUser(User $user) : void{
            try {
                $id = $user->getIdUser();
                $nom = $user->getNomUser();
                $prenom = $user->getPrenomUser();
                $mdp = $user->getMdpUser();
                $sql = "UPDATE users SET nomUser = :nom, prenomUser = :prenom, motDePasseUser = :mdp WHERE idUser = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
                $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
                $stmt->bindParam(':mdp', $mdp, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function getUserById(int $id) : User{
            $user = new User();
            try {
                $sql = "SELECT * FROM users WHERE idUser = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {

                    $user->setIdUser($data['idUser']);
                    $user->setNomUser($data['nomUser']);
                    $user->setPrenomUser($data['prenomUser']);
                    $user->setMdpUser($data['motDePasseUser']);
                }
                throw new \Exception("User not found");
            } catch (\Throwable $th) {
                throw $th;
            }

        }
        public function getAllUser() :array{
            try {
                $sql = "SELECT * FROM users";
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $users = [];
                foreach ($data as $row) {
                    $user = new User();
                    $user->setIdUser($row['idUser']);
                    $user->setNomUser($row['nomUser']);
                    $user->setPrenomUser($row['prenomUser']);
                    $user->setMdpUser($row['motDePasseUser']);
                    $users[] = $user;
                }
                return $users;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
}


?>