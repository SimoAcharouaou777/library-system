<?php
namespace App\Model;

require __DIR__ . '/../../vendor/autoload.php';
use App\Connection\connect;
use PDO;

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
        try {
            $connect = Connect::connection();
            $hashpassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, fullname, phone, email, password)
                VALUES (:username, :fullname, :phone, :email, :password)";
            $stmt = $connect->prepare($sql);

            if ($stmt) {
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':fullname', $fullname);
                $stmt->bindParam(':phone', $phone);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':password', $hashpassword);

                $stmt->execute();

                $id = $connect->lastInsertId();

                $sqlrole = "INSERT INTO user_role (user_id) VALUES (:id)";
                $stmtrole = $connect->prepare($sqlrole);

                if ($stmtrole) {
                    $stmtrole->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmtrole->execute();
                } else {
                    echo "Error preparing SQL statement for user role.";
                }
            } else {
                echo "Error preparing SQL statement for user.";
            }
        } catch (\PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function isusername($username)
    {
        $connect= Connect::connection();
        $sql="SELECT * FROM users WHERE username = :username";
        $stmt = $connect->prepare($sql);
        if($stmt){
            $stmt->bindParam(':username',$username);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            echo"error";
        }
        
    }
    public static function isemail($email)
    {
        $connect = Connect::connection();
        $sql="SELECT * FROM users WHERE email = :email";
        $stmt = $connect->prepare($sql);
        if($stmt){
            $stmt->bindParam(':email',$email);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }else{
            echo"error";
        }
    }
  
}
