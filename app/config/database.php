<?php
namespace App\Config;

use PDO;

class Database {
    public $pdo;

    public function __construct() {
        $host = 'localhost';
        $dbname = 'database';
        $username = 'root';
        $password = '';

        $this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

//<?php
////$host = "localhost";
////$dbname = "database";
////$username = "root";
////$password = "";
////
////try {
////    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
////    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////} catch (PDOException $e) {
////    die("Erreur : " . $e->getMessage());
////}
////?>

<!--//$bdd = new PDO('mysql:host=localhost;dbname=database;charset=utf8;', 'root', '');-->
<!--//$bdd_posts = new PDO('mysql:host=localhost;dbname=posts;charset=utf8;', 'root', '');-->
<!---->
<!--//$pdo = new PDO(-->
<!--//    "mysql:host=localhost;dbname=benevoles;charset=utf8",-->
<!--//    "root",-->
<!--//    "password",-->
<!--//    [-->
<!--//        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION-->
<!--//    ]-->
<!--//);-->


