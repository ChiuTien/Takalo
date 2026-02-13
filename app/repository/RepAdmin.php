<?php 
    namespace app\repository;

    use app\models\Admin;
    use Flight;
    use PDO;

    class RepAdmin {
        //Attribut
        private PDO $db;
        //Constructeur
        public function __construct(){
            $this->db = Flight::db();
        }
        //Methodes
        public function ajouterAdmin(Admin $admin) : void{
            try {
                $loginAdmin = $admin->getLoginAdmin();
                $mdpAdmin = $admin->getMdpAdmin();
                $sql = "INSERT INTO admin(loginAdmin, mdpAdmin) VALUES (:loginAdmin, :mdpAdmin)";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':loginAdmin', $loginAdmin, PDO::PARAM_STR);
                $stmt->bindValue(':mdpAdmin', $mdpAdmin, PDO::PARAM_STR);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function supprimerAdmin(int $id): void{
            try {
                $sql = "DELETE FROM admin WHERE idAdmin = :idAdmin";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idAdmin', $id, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function modifierAdmin(Admin $admin) : void{
            try {
                $idAdmin = $admin->getIdAdmin();
                $loginAdmin = $admin->getLoginAdmin();
                $mdpAdmin = $admin->getMdpAdmin();
                $sql = "UPDATE admin SET loginAdmin = :loginAdmin, mdpAdmin = :mdpAdmin WHERE idAdmin = :idAdmin";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':loginAdmin', $loginAdmin, PDO::PARAM_STR);
                $stmt->bindValue(':mdpAdmin', $mdpAdmin, PDO::PARAM_STR);
                $stmt->bindValue(':idAdmin', $idAdmin, PDO::PARAM_INT);
                $stmt->execute();
            } catch (\Throwable $th) {
                throw $th;
            }
        }
        public function getAdminById(int $idAdmin): Admin{
            $admin = new Admin();
            try {
                $sql = "SELECT * FROM admin WHERE idAdmin = :idAdmin";
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(':idAdmin', $idAdmin, PDO::PARAM_INT);
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($data) {
                    $admin->setIdAdmin($data['idAdmin']);
                    $admin->setLoginAdmin($data['loginAdmin']);
                    $admin->setMdpAdmin($data['mdpAdmin']);
                }
            } catch (\Throwable $th) {
                throw $th;
            }
            return $admin;
        }
        public function getAllAdmins() : array{
            try {
                $sql = "SELECT * FROM admin";
                $stmt = $this->db->query($sql);
                $admins = [];
                while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $admin = new Admin();
                    $admin->setIdAdmin($data['idAdmin']);
                    $admin->setLoginAdmin($data['loginAdmin']);
                    $admin->setMdpAdmin($data['mdpAdmin']);
                    $admins[] = $admin;
                }
                return $admins;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
    }
?>