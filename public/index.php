<?php
use App\Controller\AuthController;
use App\Model\User;
if(isset($_POST['submitup'])){
    AuthController::signup($_POST);
}



?>