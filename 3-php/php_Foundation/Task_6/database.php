<?php 

$host = "localhost";
$dbname = "Person";
$dbuser = "root";
$dbpassword = "Thapelo456#";


    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $dbuser,
        $dbpassword
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

