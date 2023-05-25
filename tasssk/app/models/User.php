<?php
namespace app\models;
require_once "app/models/BaseModel.php";
use app\models\Model;

class User extends Model{
    private $name,$password;


//set and get methods:
public function get_name(){
    return $this->name;
}

public function get_password(){
    return $this->password;
}

public function set_name($name){
    $this->name=$name;
}
public function set_password($password){
    $this->password=$password;
}


}

