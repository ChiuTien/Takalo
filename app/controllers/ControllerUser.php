<?php
namespace app\controllers;

use app\models\User;
use app\repository\RepUser;

class UserController {
    private RepUser $repUser;

    public function __construct() {
        $this->repUser = new RepUser();
    }

    public function addUser(User $user): void {
        $this->repUser->addUser($user);
    }

    public function deleteUser(int $id): void {
        $this->repUser->deleteUser($id);
    }

    public function editUser(User $user): void {
        $this->repUser->updateUser($user);
    }

    public function listUser(): array {
        return $this->repUser->getAllUser();
    }

    public function getUserById(int $id): User {
        return $this->repUser->getUserById($id);
    }
}

?>
