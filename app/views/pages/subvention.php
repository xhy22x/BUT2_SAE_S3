<?php
require('../../controllers/security.php');
requireResponsable(2);
ob_start();
$title = "Gestion des subventions";

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../../app/controllers/PartenariatsController.php');

$controller = new PartenariatsController($pdo);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['type'] === 'subvention') {
        $controller->enregistrerSubvention();
    }
}
$controller->afficherSubvention();


$content = ob_get_clean();
include '../partials/dashboard-template.php';