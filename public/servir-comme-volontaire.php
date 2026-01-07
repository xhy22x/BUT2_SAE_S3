<?php $title = "Servir comme volontaire - Energie Jeunes"; ?>
<?php require('../app/controllers/signup.php'); ?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/../app/views/partials/head.php'; ?>
<body>
<main>
    <form class="form-servir" method="POST" action="../app/services/registerBenevole.php">
        <h2>Inscription</h2>

        <input type="text" name="nom" placeholder="Nom" required>

        <input type="text" name="prenom" placeholder="Prénom" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Mot de passe" required>

        <button type="submit">S'inscrire</button>
    </form>
</main>
</body>
</html>
