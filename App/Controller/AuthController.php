<?php
namespace App\Controller;

session_start();
require __DIR__ . '/../../vendor/autoload.php';

use App\Connection\connect;
use App\Model\User;

class AuthController
{
    public static function signup()
    {
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
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "invalid email";
        } elseif ($password !== $confirmPassword) {
            echo "the password doesnt match";
        } elseif (User::isusername($username)) {
            echo "chose another username";
        } elseif (User::isemail($email)) {
            echo "chose another email";
        } else {
            User::creatUser($username, $fullname, $phone, $email, $password);
            header("location:../App/views/login.php");
        }
    }
    public static function login()
    {
        $connect = connect::connection();
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty("$password")) {
            echo "all the fields are required";
        } else {
            $user = User::isusername($username);
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['rolename'] = User::getuserrole($username);

                $_SESSION['username'] = $username;
                header("location:../App/views/user/userhome.php");
            } else {
                echo "password or username  wrong";
            }
        }

    }
}
