<?php
session_start();

if (!isset($_SESSION['username']) || (isset($_SESSION['rolename']) && $_SESSION['rolename'] !== 'admin')) {
   header('location:../signup.php');
   echo "you are not admin";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
hello admin
</body>
</html>