<?php

namespace app\models;

require_once "app/models/BaseModel.php";

use app\models\Model;

class User extends Model
{
    private $name, $password;


    //set and get methods:
    public function get_name()
    {
        return $this->name;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }
    public function set_password($password)
    {
        $this->password = $password;
    }


    public static function find_user($name, $password)
    {
        $model=new Model();
        $conn=$model->get_conn();
        $query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    public function create()
    {
        $query = "INSERT INTO users (name , password) VALUES ('$this->name' , $this->password)";
        $result = mysqli_query($this->conn, $query);
    }

    public function update()
    {
        $query = "UPDATE users SET name = '$this->name' , password = '$this->password' where id='$this->id'";
        $result = mysqli_query($this->conn, $query);
    }

    public static function delete( $id)
    {
        $model=new Model();
        $conn=$model->get_conn();
        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
    }
}
