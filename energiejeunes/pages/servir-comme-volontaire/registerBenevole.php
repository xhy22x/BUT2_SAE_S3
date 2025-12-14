<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom     = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $email   = $_POST['email'];
    $password = $_POST['password'];
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$nouveauBenevole = [
    "nom" => $nom,
    "prenom" => $prenom,
    "email" => $email,
    "password" => $hashedPassword,
];

$file = __DIR__ . '\data\benevoles.json';
if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}
$benevoles[] = $nouveauBenevole;

file_put_contents(
    $file,
    json_encode($benevoles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);