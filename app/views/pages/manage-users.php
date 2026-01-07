<?php
require('../../controllers/security.php');
requireAdmin();
ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/usersFunctions.php');



$table_title = "Gestion des utilisateurs";
$table_head = ['ID', 'Nom', 'Email', 'Mot de Passe', 'Rôle', 'Pôle', 'Date de création'];
$table_content = getAllUsers($pdo);

//Suppression
if(isset($_POST['delete'])){
    deleteUser((int)$_POST['post_id']);
    header('Location: admin-panel.php');
    exit();
}
?>

<div class="d-flex justify-content-center my-5">
    <a class="btn btn-outline-success btn-lg ms-2" href="add-users.php">
        <i class="bi bi-plus-circle"></i> Ajouter un utilisateur
    </a>
</div>

<?php
$path = "edit-users.php";
include '../components/table.php' ;

$content = ob_get_clean();
include '../partials/dashboard-template.php';