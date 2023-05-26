<?php
namespace app\models;


 class Model
{
    protected $id ,$conn;

    public function get_id()
    {
        return $this->id;
    }
    public function get_conn()
    {
        return $this->conn;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }
    public function __construct(){
        $data=require __DIR__."/../../config/config.php";
        $db= mysqli_connect($data['host'],$data['username'],$data['password'],$data['database']);
        $this->conn=$db;
    }
    public static function get_all($tabel){
        $model=new Model();
        $conn=$model->get_conn();
        $get="SELECT * FROM $tabel";
        $result=mysqli_query($conn,$get);
        return $result;
    }

    public static function get_by_id($tabel,$id){
        $model=new Model();
        $conn=$model->get_conn();
        $get="SELECT * FROM $tabel WHERE id='$id'";
        $result=mysqli_query($conn,$get);
        return $result;
    }

}
