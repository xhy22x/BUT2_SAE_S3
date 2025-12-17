<?php
$title = "Servir comme volontaire - Energie Jeunes";
require 'templates/header.php';




echo <<<HTML
<form method="POST" action="registerBenevole.php">
    <h2>Inscription</h2>

    <input type="text" name="nom" placeholder="Nom" required>

    <input type="text" name="prenom" placeholder="Prénom" required>

    <input type="email" name="email" placeholder="Email" required>

    <input type="password" name="password" placeholder="Mot de passe" required>

    <button type="submit">S'inscrire</button>
</form>

HTML;

require 'templates/footer.php';
