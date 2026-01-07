<?php
require('../../controllers/security.php');
requireAdmin();
ob_start();

/** @var PDO $pdo */
require('../../../config/database.php');
require('../../models/usersFunctions.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$user = getUserById($pdo, $id);

if(isset($_POST['validate'])) {
    $data = [
        'name'    => $_POST['name'],
        'email'   => $_POST['email'],
        'role'    => $_POST['role'],
        'pole_id' => !empty($_POST['pole_id']) ? (int)$_POST['pole_id'] : null
    ];

    updateUser($pdo, $id, $data);
    header("Location: manage-users.php");
    exit();
}

$stmt = $pdo->query("SELECT id, nom FROM poles ORDER BY nom ASC");
$poles = $stmt->fetchAll(PDO::FETCH_ASSOC);
$pole_options = ['' => 'Sélectionnez un pôle'];
foreach($poles as $pole){
    $pole_options[$pole['id']] = $pole['nom'];
}

$fields = [
    'name' => ['label'=>"Nom",'type'=>'text','placeholder'=>'Entrez le nom','value'=>$user['name']],
    'email' => ['label'=>"E-mail",'type'=>'text','placeholder'=>'Entrez l\'email','value'=>$user['email']],
    'role' => ['label'=>"Rôle",'type'=>'select','options'=>[
        'admin' => 'Administrateur',
        'responsable' => 'Responsable',
    ],'value'=>$user['role']],
    'pole_id' => ['label'=>"Pôle",'type'=>'select','options'=>$pole_options,'value'=>$user['pole_id']],
];

$buttonText = "Modifier l'utilisateur";

?>
<div class="container my-4">
    <a href="<?= $_SERVER['HTTP_REFERER'] ?? 'manage-users.php' ?>">← Revenir à la page précédente</a>
</div>
<?php
include '../components/form.php';

$content = ob_get_clean();
include '../partials/dashboard-template.php';
