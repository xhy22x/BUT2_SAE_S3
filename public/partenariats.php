<?php
$title = "Gestion des partenariats";

/** @var PDO $pdo */
require('../config/database.php');
require('../app/controllers/PartenariatsController.php');

$controller = new PartenariatsController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['type'] === 'partenaire') {
        $controller->enregistrerPartenaire();
    } elseif ($_POST['type'] === 'subvention') {
        $controller->enregistrerSubvention();
    }
}

$controller->afficher();
