<?php
require('../../controllers/security.php');
requireAdmin();
ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/usersFunctions.php');

//Récupère les données du poles: benevoles et partenariats
$stmt = $pdo->query("SELECT id, nom FROM poles ORDER BY nom ASC");
$poles = $stmt->fetchAll(PDO::FETCH_ASSOC);
$pole_options = ['' => 'Sélectionnez un pôle'];
foreach ($poles as $pole) {
    $pole_options[$pole['id']] = $pole['nom'];
}

if (isset($_POST['validate'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];
    $pole_id = !empty($_POST['pole_id']) ? (int)$_POST['pole_id'] : null;
    createUser($pdo, [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role,
            'pole_id' => $pole_id
    ]);
    header('Location: manage-users.php');
    exit();
}

$fields = [
    'name' => ['label'=>"Nom",'type'=>'text','placeholder'=>'Entrez un nom'],
    'email' => ['label'=>'E-mail','type'=>'text','placeholder'=>'Entrez un e-mail'],
    'password' => ['label'=>"Mot de passe",'type'=>'password','placeholder'=>'Mot de passe'],
    'role' => ['label'=>'Rôle','type'=>'select','options' => [
        '' => 'Sélectionnez un rôle',
        'admin' => 'Administrateur',
        'responsable' => 'Responsable',],'placeholder'=>'Choisir un rôle'],
    'pole_id' => ['label'=>"Pôle",'type'=>'select', 'options' => $pole_options,'placeholder'=>'Ex: Le Monde'],
];
$buttonText = "Ajouter un utilisateur";

?>
<div class="container my-4">
    <a href="<?= $_SERVER['HTTP_REFERER'] ?? 'manage-users.php' ?>">← Revenir à la page précédente</a>
</div>
<?php
include '../components/form.php' ;


$content = ob_get_clean();
include '../partials/dashboard-template.php';