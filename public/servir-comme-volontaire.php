<?php
$title = "Servir comme volontaire - Energie Jeunes";
require '../app/views/partials/header.php';




echo <<<HTML
<form class="form-servir" method="POST" action="../app/services/registerBenevole.php">
    <h2>Inscription</h2>

    <input type="text" name="nom" placeholder="Nom" required>

    <input type="text" name="prenom" placeholder="Prénom" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Mot de passe" required>

    <button type="submit">S'inscrire</button>
</form>

HTML;

require '../app/views/partials/footer.php';
