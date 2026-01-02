<?php
    $title = "Se connecter en tant que volontaire - Energie Jeunes";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'app/views/partials/head.php'; ?>
<body>
<main>
    <form class="connexion-servir" method="POST" action="#connectBenevole">
        <h2>Connexion</h2>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Mot de passe" required>

        <button type="submit" name="login">Se connecter</button>
    </form>
</main>
</body>
</html>

<!-- renvoie à la page que le bénévole pourra accéder
<?php
    if(isset($_POST['login'])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            header('Location: home.php');
        }
    }


