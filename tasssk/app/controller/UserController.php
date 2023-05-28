<?php

namespace app\controllers;

require_once "BaseController.php";
require __DIR__ . "/../models/User.php";
require_once __DIR__ . "/../models/BaseModel.php";
use app\models\User;
use app\controllers\BaseController;
use app\models\Model;
class UserController extends BaseController
{

    public function index()
    {
        $result=Model::get_all("users");
        $users=array();
        while($user = $result->fetch_object()){
            $users[]=$user;}
        $this->load_view('user/index', compact('users'));
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $user = User::find_user( $name, $password);
            if ($user) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['type'] = $user['type'];
                header('Location: /darrebni/tasssk/');
                exit;
            }
        } else {
            $this->load_view('user/login');
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
            $user->create();
            header('Location: /darrebni/tasssk/');
            exit;
        } else {
            $this->load_view('user/create');
         
        }
    }

    public function edit()
    {
        $id = $_POST['id'];
        $result = Model::get_by_id("users", $id);
        $user = $result->fetch_object();
        $this->load_view('user/edit', compact('user'));
    }

    public function update()
    {
        $id = $_POST['id'];
        $user=new User();
        $user->set_id($id);
        $user->set_name($_POST['name']);
        $user->set_password($_POST['password']);
        $user->update();
        header('Location: /darrebni/tasssk/');
        exit;
    }

    public function delete()
    {
        $id = $_POST['id'];
        User::delete($id);
        header('location: /darrebni/tasssk');
    }
}
