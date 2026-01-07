<?php

ob_start();
?>

<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
<h2> Bienvenue sur votre Page Administrateur ! </h2>
</div>

<?php
$content = ob_get_clean();
include '../partials/admin-template.php';
