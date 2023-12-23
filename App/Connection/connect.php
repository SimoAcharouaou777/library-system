<?php
namespace App\Connection;
require __DIR__.'/../../vendor/autoload.php';
$env = Dotenv\Dotenv::createImmutable(__DIR__.'/../../');
$env->load();
class connect{
    public static function connection(){
        return new PDO('mysql:host='. $_ENV['DB_HOST'] . ';db_name=' . $_ENV['DB_NAME'],
        $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    }
}

?>