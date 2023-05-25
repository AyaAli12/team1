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

    public static function getAllUsers($conn)
    {
        $query = "SELECT * FROM users ";
        $result = mysqli_query($conn, $query);
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $user = new User();
            $user->set_id($row['id']);
            $user->set_name($row["name"]);
            $user->set_password($row["password"]);
            $users[] = $user;
        }
        return $users;
    }

    public static function getUserById($conn, $id)
    {
        $query = "SELECT * FROM users WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $user = new User();
        $user->set_id($row['id']);
        $user->set_name($row["name"]);
        $user->set_password($row["password"]);
        return $user;
    }

    public static function find_user($conn, $name, $password)
    {
        $query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    public function create($conn)
    {
        $query = "INSERT INTO users (name , password) VALUES ('$this->name' , $this->password)";
        $result = mysqli_query($conn, $query);
    }

    public function update($conn)
    {
        $query = "UPDATE users SET name = '$this->name' , password = '$this->password'";
        $result = mysqli_query($conn, $query);
    }

    public static function delete($conn, $id)
    {
        $query = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $query);
    }
}
