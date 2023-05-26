<?php
require_once __DIR__ . '/app/controller/UserController.php';
require __DIR__ . '/app/controller/FamilyController.php';
require 'config/config.php';
define('BASE_PATH', '/darrebni/tasssk/');
$controller= new app\controllers\UserController();
$familycontroller= new app\controllers\FamilyController();

$action =$_SERVER['REQUEST_URI'];
session_start();
switch($action){
    case BASE_PATH :{
        if(isset($_SESSION['id'])){
            if($_SESSION['type']=='admin'){
 
                $familycontroller->index();
                $controller->index();
                break;
            }else{
                $familycontroller->index();
                break;
            }
         
        }else{
            $controller->login();
            break;
         }
        }
    case BASE_PATH.'login':
        $controller->login();
        break;       
    case BASE_PATH.'logout':
        $controller->logout();
        break; 

        case BASE_PATH.'create':
            $controller->create();
            break;  
        case BASE_PATH.'update':
             $controller->update();
             break;
        case BASE_PATH.'delete':
            $controller->delete();
            break;
        case BASE_PATH.'edit' :
            $controller->edit();
            break; 

        case BASE_PATH.'create_family': 
            $familycontroller->create();
            break;

        case BASE_PATH.'edit_family': 
         $familycontroller->edit();
         break;   
         
        case BASE_PATH.'update_family': 
         $familycontroller->update();
             break;  
        case BASE_PATH.'delete_family': 
              $familycontroller->delete();
                 break;          
        case BASE_PATH.'search': 
              $familycontroller->search();
                break;   
                
        default:
           $familycontroller->index();

    }
