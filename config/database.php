<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=benevoles;charset=utf8",
    "root",
    "password",
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
);
