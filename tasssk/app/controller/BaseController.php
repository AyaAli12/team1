<?php
namespace app\controllers;
// require_once __DIR__."/../../config/config.php";
abstract class BaseController{
    protected $conn;

    public function __construct($conn){
        $this->conn=$conn;
    }
}

