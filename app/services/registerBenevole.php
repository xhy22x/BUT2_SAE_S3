<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom     = $_POST['nom'];
    $prenom  = $_POST['prenom'];
    $email   = $_POST['email'];
    $password = $_POST['password'];
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$file = 'data\benevoles.json';

if(file_exists($file) && filesize($file) > 0) {
    $benevoles = json_decode(file_get_contents($file), true);
} else {
    $benevoles = [];
}
$nouveauBenevole = [
    "nom" => $nom,
    "prenom" => $prenom,
    "email" => $email,
    "password" => $hashedPassword,
];

if (!file_exists($file)) {
    file_put_contents($file, json_encode([]));
}
$benevoles[] = $nouveauBenevole;

file_put_contents(
    $file,
    json_encode($benevoles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);