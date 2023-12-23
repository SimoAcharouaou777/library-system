<?php
require '../vendor/autoload.php';
use App\Connection\connect;
use App\Controller\AuthController;
use App\Model\User;

if(isset($_POST['submitup'])){
    AuthController::signup($_POST);
}
if(isset($_POST['submitin'])){
    AuthController::login();
}



?>