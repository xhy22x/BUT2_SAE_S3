<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom     = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $user_email   = $_POST['email'];
    $tel = $_POST['tel'];
    $user_password = $_POST['password'];

}

$hashedPassword = password_hash($user_password, PASSWORD_DEFAULT);
$name = $_POST['nom'] . " " . $_POST['prenom'];


$pdo = new PDO('sqlite:' . __DIR__ . '../../../config/database.sqlite');

$stmt = $pdo->prepare('INSERT INTO benevoles (name, mail, tel, dateReg, password)
             VALUES (:name, :mail, :tel, :dateReg, :password)'
);

$stmt->execute([
    ':name' => $name,
    ':mail' => $user_email,
    ':tel' => $tel,
    ':dateReg' => date('Y-m-d'),
    ':password' => $user_password
]);