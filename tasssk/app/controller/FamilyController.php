<?php
namespace app\controllers;

require_once "BaseController.php";
require __DIR__ . "/../models/Family.php";
require_once __DIR__ . "/../models/BaseModel.php";

use app\models\Family;
use app\models\Model;

use app\controllers\BaseController;

class FamilyController extends BaseController {
    public function index(){
         $result=Model::get_all("families");
         $families=array();
         while($Family = $result->fetch_object()){
            $families[]=$Family;
         }
        $this->load_view('family/index', compact('families'));
    }


    public function create(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
           $Family=new Family();
        $Family->set_fname($_POST['fname']);
        $Family->set_mname($_POST['mname']);
       $Family->set_lname($_POST['lname']);
       $Family->set_num_of_members($_POST['num_of_members']);
       $Family->set_state($_POST['functional_state']);
       $Family->set_phone($_POST['phone']);
       $Family->set_address($_POST['address']);
       $Family->create();
       header('Location: /darrebni/tasssk');
        }else {
            $this->load_view('family/create');
        }
    }


    public function edit() {
        $id = $_POST['id'];
        $result = Model::get_by_id("families", $id);
        $Family = $result->fetch_object();
        $this->load_view('family/edit', compact('Family'));
    }


    public function update(){
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            $Family=new Family();
            $Family->set_id($_POST['id']);
            $Family->set_fname($_POST['fname']);
            $Family->set_mname($_POST['mname']);
           $Family->set_lname($_POST['lname']);
           $Family->set_num_of_members($_POST['num_of_members']);
           $Family->set_state($_POST['functional_state']);
           $Family->set_phone($_POST['phone']);
           $Family->set_address($_POST['address']);
           $Family->update();
           header('Location: /darrebni/tasssk');
           exit;
        }
        }

        
        public function delete(){
            $id = $_POST['id'];
            Family::delete($id);
            header('Location: /darrebni/tasssk');
            exit;
        }

        public function search(){
            if ($_SERVER['REQUEST_METHOD']==='POST') {
             if(isset($_POST['search'])){
                $address=$_POST['address'];
                $families=Family::found($address);
                $this->load_view('family/searsh', compact('families'));
            }
           
        }
    }}