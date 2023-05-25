<?php
namespace app\models;


abstract class Model{
    protected $id;

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id){
        $this->id=$id;
    }
   
}

