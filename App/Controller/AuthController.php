<?php
namespace App\Controller;

require __DIR__.'/../../vendor/autoload.php';


use App\Connection\connect;
use App\Model\User;

class AuthController {
    public static function signup() {
        $connect = connect::connection();
        $username = $_POST['username'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];

        if (empty($username) || empty($fullname) || empty($phone) || empty($email) ||
            empty($password) || empty($confirmPassword)) {
            echo "All the fields are required ";
        } else {
            User::creatUser($username, $fullname, $phone, $email, $password);
        }
    }
}
?>
