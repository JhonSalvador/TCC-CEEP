<?php

function connect() {
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $db_name = "momocoffe";
    
    $pdo = new PDO("mysql:host=$serverName;dbname=$db_name;charset=utf8", $userName, $password);
    return $pdo;
}
?>