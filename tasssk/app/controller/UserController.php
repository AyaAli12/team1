<?php

namespace app\controllers;

require_once "BaseController.php";
require __DIR__ . "/../model/User.php";

use app\models\User;
use app\controllers\BaseController;

class UserController extends BaseController
{

    public function index()
    {

        $users = User::getAllUsers($this->conn);
        require __DIR__ . '/../../views/user/index.php';
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $user = User::find_user($this->conn, $name, $password);
            if ($user) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                header('Location: /darrebni/tasssk/');
                exit;
            }
        } else {
            require __DIR__ . '/../../views/user/login.php';
        }
    }

    public function logout()
    {
        session_destroy();
        header('Location: /darrebni/tasssk/');
        exit;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->set_name($_POST['name']);
            $user->set_password($_POST['password']);
            $user->create($this->conn);
            header('Location: /darrebni/tasssk/');
            exit;
        } else {
            require __DIR__ . '/../../views/user/create.php';
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $user = User::getUserById($this->conn, $id);
        require __DIR__ . '/../../views/user/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $user = User::getUserById($this->conn, $id);
        $user->set_name($_POST['name']);
        $user->set_password($_POST['password']);
        $user->update($this->conn);
        header('Location: /darrebni/tasssk/');
        exit;
    }

    public function delete($id)
    {
        User::delete($this->conn, $id);
        header('location: /darrebni/tasssk');
    }
}
