<?php
namespace Model\User;

use App\Connection\connect;

$connect = Connection::connect();
class User
{
    private $id;
    private $username;
    private $fullname;
    private $phone;
    private $email;
    private $password;
    private $rolename;

    public static function creatUser($username, $fullname, $phone, $email, $password)
    {
        try{
        global $connect;
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username , fullname , phone , email , password)
        values (:username , :fullname , :phone , :email , :password)";
        $stmt = $connect->prepare($sql);
        if ($stmt) {
            $stmt->execute([':username ' => $username, ':fullname' => $fullname, ':phone' => $phone,
                ':email' => $email, ':password' => $hashpassword]);
        }else{
            echo"error : ".errorInfo();
        }
    }catch(PDOExeption $e){
     echo"error : ".$e->getMessage();
    }
    }
}
