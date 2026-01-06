<?php
//$pdo = new PDO(
//    "mysql:host=localhost;dbname=benevoles;charset=utf8",
//    "root",
//    "password",
//    [
//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//    ]
//);
//    $db_server = "127.0.0.1";
//    $db_username = "root";
//    $db_password = "";
//    $db_name = "benevolesdb";
//    $conn = "";
//
//    $conn = mysqli_connect($db_server,
//                            $db_username,
//                            $db_password,
//                            $db_name);

//pour se connecter:
$pdo = new PDO("sqlite:" . __DIR__ . "/database.sqlite");

