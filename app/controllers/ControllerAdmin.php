<?php 
    namespace app\controllers;

    use app\models\Admin;
    use app\repository\RepAdmin;

    class ControllerAdmin {
        //Attribut
            private RepAdmin $repAdmin;
        //Constructeur
            public function __construct(){
                $this->repAdmin = new RepAdmin();
            }
        //CRUD
            public function ajouterAdmin(Admin $admin) : void{
                $this->repAdmin->ajouterAdmin($admin);
            }
            public function supprimerAdmin(int $id): void{
                $this->repAdmin->supprimerAdmin($id);
            }
            public function modifierAdmin(Admin $admin) : void{
                $this->repAdmin->modifierAdmin($admin);
            }
            public function getAdminById(int $idAdmin): Admin{
                return $this->repAdmin->getAdminById($idAdmin);
            }
        //Methodes supplementaires
    }
?>