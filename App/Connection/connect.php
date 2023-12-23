<?php
namespace App\Connection;
require __DIR__.'/../../vendor/autoload.php';
use PDO;
use \Dotenv\Dotenv;
$env = Dotenv::createImmutable(__DIR__.'/../../');
$env->load();
class connect{
    public static function connection(){
        
        return new PDO('mysql:host='. $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'],
        $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    }
}

?>