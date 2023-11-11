<?php

require_once __DIR__ .  "/app/model/user_model.php";
require_once __DIR__ .  "/app/controler/user_controler.php";
require_once __DIR__ .  "/config/config.php";
require_once __DIR__ .  "/lib/db/MysqliDb.php";

$config=require "config/config.php";
$db=new MysqliDb (
    $config['db_host'],
    $config['db_user'],
    $config['db_password'],
    $config['db_name']
);
$request=$_SERVER['REQUEST_URI'];
define('BASE_PATH','/mvc/');

use Usermodel\Usermodel;
$model=new Usermodel($db);

use Usercontroler\Usercontroler;
$controller=new Usercontroler($model);
// var_dump($reuest);

switch($request){
    case BASE_PATH :
        $controller->index();
        break;
    case  BASE_PATH .'addUser':
        $controller->addUser();
        break;
    case BASE_PATH ."update?id=".$_GET['id']:
        $controller->update($_GET['id']);
        break;
    case BASE_PATH ."deleteUser?id=".$_GET['id']:
        $controller->deleteUser($_GET['id']);
        break;
}

// if(method_exists($controller,$action)){
//     if(isset($id)){
    
//         $controler->$action($id);
//     }
//     else{
        
//         $controller->$action();
//     }
// }



?>