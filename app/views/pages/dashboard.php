<?php
require('../../controllers/security.php');

$user = "";
if ($_SESSION['role'] === 'admin') $user = "Admin";
if ($_SESSION['role'] === 'responsable'){
    if($_SESSION['pole_id'] === 1) $user = "Chef Bénévole";
    if($_SESSION['pole_id'] === 2) $user = "Chef Partenariat";
    if($_SESSION['pole_id'] === 2) $user = "Chargé Communication";

}
ob_start();
?>

<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
<h2> Bienvenue sur votre espace <?= $user ?> ! </h2>
</div>

<?php
$content = ob_get_clean();
include '../partials/dashboard-template.php';
